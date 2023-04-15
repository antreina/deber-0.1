@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card-header">{{ __('Estudiante') }}
            </div>
            <div class="card-body mt-3">
                <table class="table table-striped">
                    <tr class="table-warning">
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Carrera</td>
                        <td>Calificación</td>
                    </tr>
                    @foreach ($estudiantes as $estu)
                        <tr>
                            <td>{{$estu->nombre}}</td>
                            <td>{{$estu->apellido}}</td>
                            <td>{{$estu->carrera}}</td>
                            <td>{{$estu->calificacion}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>


        </div>
    </div>
</div>
    
@endsection