@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card border-warning">
            <div class="card-header ">{{ __('Carrera') }}
                <a href="{{ route('carreras.create') }}" class="btn btn-primary">Nuevo</a>
            </div>
            <div class="card-body mt-3 ">
                <table class="table table-striped">
                    <tr class="table-warning">
                        <td>Carrera</td>
                        <td>Modalidad</td>
                    </tr>
                    @foreach ($carreras as $car)
                        <tr>
                            <td>{{$car->carrera}}</td>
                            <td>{{$car->modalidad}}</td>
                            <td><a class="btn btn-success" href="{{ url('/carreras/'.$car->id.'/edit')}}">Editar</a></td>

                            <td>
                                <form action="{{ route('carreras.destroy',$car->id)}}" method="POST">
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
</div>
    @endsection