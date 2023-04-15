<div class="card-body bg-secondary">
    <h3 class="text-white">Agregar Materias</h3>
    @include('livewire.m-form')
    <br>
    <div class="form-group">
        <button class="btn btn-primary text-white" wire:click='save'>Guardar</button>
        <button class="btn btn-warning text-white" wire:click='resetear'>Cancelar</button>
    </div>
</div>