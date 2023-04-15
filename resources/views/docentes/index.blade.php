@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card-header">{{ __('Docente') }}
                <a href="{{ route('docentes.create') }}" class="btn btn-primary">Nuevo</a>
            </div>
            <div class="card-body mt-3">
                <table class="table table-striped">
                    <tr class="table-warning">
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Especialidad</td>
                    </tr>
                    @foreach ($docentes as $doc)
                        <tr>
                            <td>{{$doc->nombre}}</td>
                            <td>{{$doc->apellido}}</td>
                            <td>{{$doc->especialidad}}</td>
                            <td><a class="btn btn-success" href="{{ url('/docentes/'.$doc->id.'/edit')}}">Editar</a></td>

                            <td>
                                <form action="{{ route('docentes.destroy',$doc->id)}}" method="POST">
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
</div>
    
@endsection