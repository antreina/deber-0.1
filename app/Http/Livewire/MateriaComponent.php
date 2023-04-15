<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Materia;

class MateriaComponent extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $view='m-create';
    public $materia_id,$materia,$calificacion,$estado;

    public function render()
    {
        $materias=Materia::orderBy('id','asc')->paginate(5);
        return view('livewire.materia-component',compact('materias'));
    }

        //metodo para eliminar
    public function destroy($id)
    {
        Materia::destroy($id);
    }


        //metodo para guardar
    public function save()
    {
        $this->validate([
            'materia'       => 'required',
            'calificacion'  => 'required',
            'estado'        => 'required',
        ]);
        Materia::create([
            'materia'       =>$this->materia,
            'calificacion'  =>$this->calificacion,
            'estado'        =>$this->estado,
        ]);
        $this->reset();
    }

    public function edit($id)
    {
        $materia=Materia::find($id);
        $this->materia_id=$materia->id;
        $this->materia=$materia->materia;
        $this->calificacion=$materia->calificacion;
        $this->estado=$materia->estado;
        $this->view='m-edit';
    }

    public function update()
    {
        $this->validate([
            'materia'=> 'required',
            'calificacion'=> 'required',
            'estado'=> 'required',
        ]);
        $materia=Materia::find($this->materia_id);
        $materia->update([
            'materia'       =>$this->materia,
            'calificacion'  =>$this->calificacion,
            'estado'        =>$this->estado,
        ]);
        $this->reset();
    }


    public function resetear()
    {
        $this->reset(['materia','calificacion','estado']);
    }
}








