<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    
    public function index()
    {
        $libro = Libro::all();
        return view('Libros.index')->with('libros',$libro);
    }

    
    public function create()
    {
        return view('Libros.create');
    }

    
    public function store(Request $request)
    {

        $request->validate([
            'Titulo' => 'required|regex:/^[a-zA-Z\0-9\s\áÁéÉíÍóÓpLñÑ\.]+$/',
            'Autor' => 'required|regex:/^[a-zA-Z\s\áÁéÉíÍóÓpLñÑ\.]+$/',
            'Editorial' => ['required','regex:/^[a-zA-Z\0-9\s\áÁéÉíÍóÓpLñÑ\.]+$/'],
            'Ano_de_publicacion' => 'required|numeric',
            'Cantidad_Disponible' => 'required|numeric'
        ], [
            'Titulo.required' => 'El titulo es requerido',
            'Titulo.regex' => 'El titulo tiene caracteres no permitidos',
            'Autor.required' => 'El autor es requerido',
            'Autor.regex' => 'El autor tiene caracteres no permitidos',
            'Editorial.required' => 'El editorial es requerido',
            'Ano_de_publicacion.required' => 'El año de publicacion  es requerido',
            'Cantidad_Disponible' => 'El cantidad disponible es requerido',
            'Ano_de_publicacion.numeric' => 'El año de publicacion debe ser de tipo numérico',
            'Cantidad_Disponible.numeric' => 'La cantidad disponible debe ser de tipo numérico',
        ]);


        
        $libro = new Libro(); 
        $libro->Titulo=$request->input('Titulo');
        $libro->Autor=$request->input('Autor');
        $libro->Editorial=$request->input('Editorial');
        $libro->Ano_de_publicacion=$request->input('Ano_de_publicacion');
        $libro->Cantidad_Disponible=$request->input('Cantidad_Disponible');

        $libro->save(); 

        return redirect()->route('libro.index');
    
    }


    public function show($id)
    {
        $libro = Libro::findOrfail($id); 
        return view('Libros.show' , compact('libro'));
    }


    public function edit($id)
    {
        $libro = Libro::findOrfail($id); 
        return view('Libros.edit')->with('libro',$libro);
    

    }

    public function update(Request $request, $id)
    {
        $libro = Libro::findOrfail($id); 

        $request->validate([
            'Titulo' => 'required|regex:/^[a-zA-Z\s\áÁéÉíÍóÓpLñÑ\.]+$/',
            'Autor' => 'required|regex:/^[a-zA-Z\s\áÁéÉíÍóÓpLñÑ\.]+$/',
            'Editorial' => ['required'],
            'Ano_de_publicacion' => 'required',
            'Cantidad_Disponible' => 'required'
        ], [
            'Titulo.required' => 'El titulo es requerido',
            'Titulo.regex' => 'El titulo tiene caracteres no permitidos',
            'Autor.required' => 'El autor es requerido',
            'Autor.regex' => 'El autor tiene caracteres no permitidos',
            'Editorial.required' => 'El editorial es requerido',
            'Ano_de_publicacion.required' => 'El Ano_de_publicacion  es requerido',
            'Cantidad_Disponible' => 'El Cantidad_Disponible es requerido',

        ]);

        
        $libro->Titulo=$request->input('Titulo');
        $libro->Autor=$request->input('Autor');
        $libro->Editorial=$request->input('Editorial');
        $libro->Ano_de_publicacion=$request->input('Ano_de_publicacion');
        $libro->Cantidad_Disponible=$request->input('Cantidad_Disponible');

        $libro->save(); 

        return redirect()->route('libro.index');
    }

    public function destroy($id)
    {
    Libro::destroy($id);
    return redirect()->route('libro.index');
    }
}
