<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = Usuario::all(); 
        return view('Usuarios.index')->with('usuarios',$usuario);
    }

    public function create()
    {
        return view('Usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|regex:/^[a-zA-Z\0-9\s\áÁéÉíÍóÓpLñÑ\.]+$/',
            'correo_electronico' => 'required|unique:usuarios',
            'telefono' => ['required','regex:/^[a-zA-Z\0-9\s\áÁéÉíÍóÓpLñÑ\.]+$/'],
            'direccion' => 'required',
        
        ], [
            'nombre.required' => 'El nombre es requerido',
            'nombre.regex' => 'El nombre tiene caracteres no permitidos',
            'correo_electronico.required' => 'El correo electronico es requerido',
            'correo_electronico.regex' => 'El correo electronico tiene caracteres no permitidos',
            'telefono.required' => 'El telefono es requerido',
            'direccion.required' => 'La direccion de publicacion  es requerido',
        ]);

        
        $usuario = new Usuario(); 
        $usuario->nombre=$request->input('nombre');
        $usuario->correo_electronico=$request->input('correo_electronico');
        $usuario->telefono=$request->input('telefono');
        $usuario->direccion=$request->input('direccion');

        $usuario->save(); 

        return redirect()->route('usuario.index');
    }

    public function show($id)
    {
        $usuario = Usuario::findOrfail($id); 
        return view('Usuarios.show' , compact('usuarios'));
    }


    public function edit($id)
    {
        $usuario = Usuario::findOrfail($id);
        return view('Usuarios.edit')->with('usuarios',$usuario);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrfail($id); 

        $request->validate([
            'nombre' => 'required|regex:/^[a-zA-Z\0-9\s\áÁéÉíÍóÓpLñÑ\.]+$/',
            'correo_electronico' => 'required|string',
            'telefono' => ['required','regex:/^[a-zA-Z\0-9\s\áÁéÉíÍóÓpLñÑ\.]+$/'],
            'direccion' => 'required',
            
        ], [
            'nombre.required' => 'El nombrees requerido',
            'nombre.regex' => 'El nombre tiene caracteres no permitidos',
            'correo_electronico.required' => 'El correo electronico es requerido',
            'correo_electronico.regex' => 'El correo electronico tiene caracteres no permitidos',
            'telefono.required' => 'El telefono es requerido',
            'direccion.required' => 'La direccion de publicacion  es requerido',
        ]);
        
        $usuario->nombre=$request->input('nombre');
        $usuario->correo_electronico=$request->input('correo_electronico');
        $usuario->telefono=$request->input('telefono');
        $usuario->direccion=$request->input('direccion');

        $usuario->save(); 

        return redirect()->route('usuarios.index');
    }


    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect()->route('usuario.index');
    }
}
