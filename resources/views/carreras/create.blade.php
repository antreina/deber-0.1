@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-warning">
                <div class="card-header">Formulario nueva carrera</div>
                <div class="card-body">
                    <form  action="{{route('carreras.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="Name" class="form-label">Nombre</label>
                            <select class="form-select" aria-label="Default select example" name="carrera">                            
                                <option selected>Seleccione Carrera</option>
                                <option value="Gastrononia">Gastrononia</option>                          
                                <option value="Desarrollo de software">Desarrollo de software</option>                            
                                <option value="Educacion inicial">Educacion inicial</option>                              
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="Detail" class="form-label">Detalle</label>                           
                            <select class="form-select" aria-label="Default select example" name="modalidad">                            
                                <option selected>Seleccione Modalidad</option>
                                <option value="todas">toda</option>                          
                                <option value="intensivo">intensivo</option>                              
                            </select>                            
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <a class="btn btn-primary" href="{{ url('/carreras')}}" >Cancelar</a>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
    
@endsection