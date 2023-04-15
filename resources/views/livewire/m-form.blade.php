<div class="form-group">
    <label for="" class="text-white">Materia</label>
    <input type="text" class="form-control" wire:model='materia'>  
    @error('materia') <span class="text-danger">{{$message}}</span>@enderror 
</div>
<div class="form-group ">
    <label for="" class="text-white" >Calificacion</label>
    <input type="number" class="form-control" wire:model='calificacion'>
    @error('calificacion') <span class="text-danger">{{$message}}</span>@enderror
</div>
<div class="form-group ">
    <label for="" class="text-white" >Estado</label>
    <input type="text" class="form-control" wire:model='estado'>
    @error('estado') <span class="text-danger">{{$message}}</span>@enderror
</div>