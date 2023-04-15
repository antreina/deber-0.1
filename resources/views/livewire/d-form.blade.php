<div class="form-group">
    <label for="" class="text-white">Nombre</label>
    <input type="text" class="form-control" wire:model='name'>  
    @error('name') <span class="text-danger">{{$message}}</span>@enderror 
</div>
<div class="form-group ">
    <label for=""class="text-white" >Detalle</label>
    <textarea type="text" class="form-control" wire:model='detail'></textarea>
    @error('detalle') <span class="text-danger">{{$message}}</span>@enderror
</div>