@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-warning">
                <div class="card-header">Formulario Nuevo Docente</div>
                <div class="card-body">
                    <form  action="{{route('docentes.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="Nombre" class="form-label">Nombres</label>
                            <input type="text" class="form-control  border-warning" placeholder="Nombres" name="nombre" >
                            </div>
                        
                        <div class="mb-3">
                            <label for="Apellido" class="form-label">Apellidos</label>
                            <input type="text" class="form-control  border-warning" placeholder="Apellidos" name="apellido" >
                        </div>

                        <div class="mb-3">
                            <label for="Detail" class="form-label">Especialidad</label> 
                            <input type="text" class="form-control  border-warning" placeholder="Especialidad" name="especialidad" >                                                  
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <a class="btn btn-primary" href="{{ url('/docentes')}}" >Cancelar</a>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
    
@endsection