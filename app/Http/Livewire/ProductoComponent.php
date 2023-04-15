<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Producto;
use Symfony\Contracts\Service\Attribute\Required;

class ProductoComponent extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $view='create';
    public $producto_id,$name,$description,$quantity,$price;
    public function render()
    {
        $productos=Producto::orderBy('id','desc')->paginate(5);
        return view('livewire.products.view',compact('productos'));
    }
    //metodo para eliminar
    public function destroy($id){
        Producto::destroy($id);
    }

    //metodo para guardar
    public function save()
    {
        $this->validate([
            'name'=> 'required',
            'description'=> 'required',
            'quantity'=> 'required',
            'price'=> 'required'
        ]);
        Producto::create([
            'name'       =>$this->name,
            'description'=>$this->description,
            'quantity'   =>$this->quantity,
            'price'      =>$this->price,
        ]);
        $this->reset();
    }

    public function edit($id)
    {
        $producto=Producto::find($id);
        $this->producto_id=$producto->id;
        $this->name=$producto->name;
        $this->description=$producto->description;
        $this->quantity=$producto->quantity;
        $this->price=$producto->price;
        $this->view='edit';
    }

    public function update()
    {
        $this->validate([
            'name'=> 'required',
            'description'=> 'required',
            'quantity'=> 'required',
            'price'=> 'required'
        ]);
        $producto=Producto::find($this->producto_id);
        $producto->update([
            'name'       =>$this->name,
            'description'=>$this->description,
            'quantity'   =>$this->quantity,
            'price'      =>$this->price,
        ]);
        $this->reset();
    }

    public function resetear()
    {
        $this->reset(['name','description','quantity','price']);
    }

}


