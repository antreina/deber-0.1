<?php

namespace App\Http\Controllers;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('materias./index');
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     return view('materias.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $materia= new Materia();
    //     $materia-> materia=$request->materia;
    //     $materia-> calificacion=$request-> calificacion;
    //     $materia->estado=$request->estado;
    //     $materia->save();
    //     return redirect('materias/');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     $materias= Materia::findOrFail($id);
    //     return view('materias.edit', compact('materias'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     $materia= Materia::findOrFail($id);
    //     $materia-> materia=$request->materia;
    //     $materia-> calificacion=$request-> calificacion;
    //     $materia->estado=$request->estado;
    //     $materia->save();
    //     return redirect('materias/');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     $materia = Materia ::findOrFail($id);
    //     $materia->delete();
    //     return redirect()->back()->with('success','eliminado con exito');
    // }
}
