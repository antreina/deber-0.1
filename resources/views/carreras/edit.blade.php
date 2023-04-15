@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-warning">
                <div class="card-header border-warning">Actualizar Carreras</div>
                <div class="card-body">
                    <form  action="{{url('carreras/'.$carrera->id)}}" method="post">
                        @method('PUT')

                        @csrf
                        <div class="mb-3">
                            <table class="table ">
                                <tr class="table ">
                                    <td>Carrera</td>
                                    <td>Modalidad</td>
                                </tr>
                                    <tr class="bg-warning">
                                        <td>{{$carrera->carrera}}</td>
                                        <td>{{$carrera->modalidad}}</td>
                                    </tr>    
                            </table>

                        </div>

                        <div>
                            <label for="Name" class="form-label">Carrera</label>
                            <select class="form-select" aria-label="Default select example" name="carrera">                            
                                <option selected>{{$carrera->carrera}}</option>
                                <option value="Gastrononia">Gastrononia</option>                          
                                <option value="Desarrollo de software">Desarrollo de software</option>                            
                                <option value="Educacion inicial">Educacion inicial</option>                            
                            </select>
                        </div>
                        

                        <div class="mb-3">
                            <label for="Detail" class="form-label">Modalidad</label>                           
                            <select class="form-select" aria-label="Default select example" name="modalidad">                            
                                <option selected>{{$carrera->modalidad}}</option>
                                <option value="todas">toda</option>                          
                                <option value="intensivo">intensivo</option>                                                    
                            </select>                            
                        </div>

                        <div class="mb-3 ">
                            <button class="btn btn-warning" type="submit">Guardar</button>
                            <a class="btn btn-primary" href="{{ url('/carreras')}}" >Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection