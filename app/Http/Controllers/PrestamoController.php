<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    public function index()
    {
        $prestamo = Prestamo::all(); 
        return view('Prestamos.index')->with('prestamos',$prestamo);
    }

    public function create()
    {
        return view('Prestamos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'fecha_solicitud' => 'required|date',
        'fecha_prestamo' => 'required|date',
        'fecha_devolucion' => ['required', 'date'],
        'libro_id' => 'required|numeric',
        'usuario_id' => 'required|numeric',

    ], [
        'fecha_solicitud.required' => 'El fecha_solicitud es requerido',
            'fecha_solicitud.regex' => 'El fecha_solicitud tiene caracteres no permitidos',
            'fecha_prestamo.required' => 'El fecha_prestamoes requerido',
            'fecha_prestamo.regex' => 'El fecha_prestamo tiene caracteres no permitidos',
            'fecha_devolucion.required' => 'la fecha de devolucion requerido',
            'libro_id.required' => 'El libro_id  es requerido',
        
        
    ]);
        
        $prestamo = new Prestamo(); 
        $prestamo->fecha_solicitud=$request->input('fecha_solicitud');
        $prestamo->fecha_prestamo=$request->input('fecha_prestamo');
        $prestamo->fecha_devolucion=$request->input('fecha_devolucion');
        $prestamo->libro_id=$request->input('libro_id');
        $prestamo->usuario_id=$request->input('usuario_id');
    
        $prestamo->save(); 

        return redirect()->route('prestamo.index');
    }

    public function show($id)
    {
        $prestamo = Prestamo::findOrfail($id); 
        return view('Prestamos.show' , compact('prestamos'));
    }

    public function edit($id)
    {
        $prestamo = Prestamo::findOrfail($id); 
        return view('prestamos.edit')->with('prestamos',$prestamo);
    }

    public function update(Request $request, $id)
    {
        $prestamo = Prestamo::findOrfail($id); 

        $request->validate([
            'fecha_solicitud' => 'required|date',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => ['required|date'],
            'libro_id' => 'required|numeric',
            'usuario_id' => 'required|numeric',
        
        ], [
            'fecha_solicitud.required' => 'El fecha_solicitud es requerido',
            'fecha_solicitud.regex' => 'El fecha_solicitud tiene caracteres no permitidos',
            'fecha_prestamo.required' => 'El fecha_prestamoes requerido',
            'fecha_prestamo.regex' => 'El fecha_prestamo tiene caracteres no permitidos',
            'fecha_devolucion.required' => 'la fecha de devolucion requerido',
            'libro_id.required' => 'El libro_id  es requerido',
            
            
        ]);
    
        $prestamo->fecha_solicitud=$request->input('fecha_solicitud');
        $prestamo->fecha_prestamo=$request->input('fecha_prestamo');
        $prestamo->fecha_devolucion=$request->input('fecha_devolucion');
        $prestamo->libro_id=$request->input('libro_id');
        $prestamo->usuario_id=$request->input('usuario_id');
        
        $prestamo->save(); 

        return redirect()->route('prestamos.index');
    }

    public function destroy($id)
    {
        Prestamo::destroy($id);
    return redirect()->route('libro.index');
    }
}
