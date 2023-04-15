<div class="form-group">
    <label for="" class="text-white">Nombre</label>
    <input type="text" class="form-control" wire:model='name'>  
    @error('name') <span class="text-danger">{{$message}}</span>@enderror 
</div>
<div class="form-group ">
    <label for=""class="text-white">Descripción</label>
    <textarea type="text" class="form-control" wire:model='description'></textarea>
    @error('description') <span class="text-danger">{{$message}}</span>@enderror
</div>
<div class="form-group">
    <label for=""class="text-white">Cantidad</label>
    <input type="number" class="form-control" wire:model='quantity'>
    @error('quantity') <span class="text-danger">{{$message}}</span>@enderror
</div>
<div class="form-group">
    <label for=""class="text-white">Precio</label>
    <input type="number" class="form-control" wire:model='price'>
    @error('price') <span class="text-danger">{{$message}}</span>@enderror
</div>