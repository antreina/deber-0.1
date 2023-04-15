<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docentes=Docente::all();
        return view('docentes.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $docente= new Docente();
        $docente-> nombre=$request->nombre;
        $docente-> apellido=$request-> apellido;
        $docente->especialidad=$request->especialidad;
        $docente->save();
        return redirect('docentes/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $docentes= Docente::findOrFail($id);
        return view('docentes.edit', compact('docentes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $docente = Docente::findOrFail($id);
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->especialidad = $request->especialidad;
        $docente->save();
        return redirect('docentes/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $docente = Docente ::findOrFail($id);
        $docente->delete();
        return redirect()->back()->with('success','eliminado con exito');
    }
}
