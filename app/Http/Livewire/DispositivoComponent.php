<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Dispositivo;
use Symfony\Contracts\Service\Attribute\Required;

class DispositivoComponent extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $view='d-create';
    public $dispositivo_id,$name,$detail;
    public function render()
    {
        $dispositivo=Dispositivo::orderBy('id','desc')->paginate(5);
        return view('livewire.dispositivo-component',compact('dispositivo'));
    }
    //metodo para eliminar
    public function destroy($id){
        Dispositivo::destroy($id);
    }

    //metodo para guardar
    public function save()
    {
        $this->validate([
            'name'=> 'required',
            'detail'=> 'required',
        ]);
        Dispositivo::create([
            'name'  =>$this->name,
            'detail'=>$this->detail,
        ]);
        $this->reset();
    }

    public function edit($id)
    {
        $dispositivo=Dispositivo::find($id);
        $this->dispositivo_id=$dispositivo->id;
        $this->name=$dispositivo->name;
        $this->detail=$dispositivo->detail;
        $this->view='d-edit';
    }

    public function update()
    {
        $this->validate([
            'name'=> 'required',
            'detail'=> 'required',
        ]);
        $dispositivo=Dispositivo::find($this->dispositivo_id);
        $dispositivo->update([
            'name'       =>$this->name,
            'detail'=>$this->detail,
        ]);
        $this->reset();
    }

    public function resetear()
    {
        $this->reset(['name','detail']);
    }

}
