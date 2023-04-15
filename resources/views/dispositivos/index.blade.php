@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card bg-body border-secondary">
                <div class="card-header border-secondary"><h4>Dispositivos Existentes</h4>
                </div>
                <div class="card-body">
                    @livewire('dispositivo-component')
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection 