<div class="card-body bg-secondary">
    <h3 class="text-white">Agregar Dispositivo</h3>
    @include('livewire.d-form')
    <br>
    <div class="form-group">
        <button class="btn btn-primary text-white" wire:click='save'>Guardar</button>
        <button class="btn btn-warning text-white" wire:click='resetear'>Cancelar</button>
    </div>
</div>