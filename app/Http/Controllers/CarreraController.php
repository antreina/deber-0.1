<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carreras=Carrera::all();
        return view('carreras.index', compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carreras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $carrera = new Carrera();
        $carrera->carrera=$request->carrera;
        $carrera->modalidad=$request->modalidad;
        $carrera->save();
        return redirect('carreras/');
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
        $carrera = Carrera::findOrFail($id);
        return view('carreras.edit',compact('carrera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request);
        $carrera= Carrera::findOrFail($id);
        $carrera->carrera=$request->carrera;
        $carrera->modalidad=$request->modalidad;
        $carrera->save();
        return redirect('carreras/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carrera = Carrera ::findOrFail($id);
        $carrera->delete();
        return redirect()->back()->with('success','eliminado con exito');

    }
}
