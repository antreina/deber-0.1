<div class="card-body bg-secondary">
    <h4 class="text-white">Modificar Materia</h4>
    @include('livewire.m-form')
    <br>
    <div class="form-group">
        <button class="btn btn-primary text-white" wire:click='update'>Guardar</button>
        <button class="btn btn-warning text-white" wire:click='resetear'>Cancelar</button>
    </div>
</div>