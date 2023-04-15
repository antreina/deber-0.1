@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card bg-body border-secondary">
                <div class="card-header border-secondary"><h4>Materias Existentes</h4>
                    
                </div>
                <div class="card-body">
                    @livewire('materia-component')
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection  

{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card-header">{{ __('Materia') }}
                <a href="{{ route('materias.create') }}" class="btn btn-primary">Nuevo</a>
            </div>
            <div class="card-body mt-3">
                <table class="table table-striped">
                    <tr class="table-warning">
                        <td>Materia</td>
                        <td>Calificacion</td>
                        <td>Estado</td>
                    </tr>
                    @foreach ($materias as $mat)
                        <tr>
                            <td>{{$mat->materia}}</td>
                            <td>{{$mat->calificacion}}</td>
                            <td>{{$mat->estado}}</td>
                            <td><a class="btn btn-success" href="{{ url('/materias/'.$mat->id.'/edit')}}">Editar</a></td>                             
                            <td>
                                <form action="{{ route('materias.destroy',$mat->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" href=>Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div> --}}