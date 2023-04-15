@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-warning">
                <div class="card-header">Formulario de nuevo Dispositivo</div>
                <div class="card-body">
                    <form  action="{{route('dispositivos.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="Name" class="form-label">Nombre</label>
                            <select class="form-select" aria-label="Default select example" name="name">                            
                                <option selected>Seleccione Dispositivo</option>
                                <option value="Monitor">Monitor</option>                          
                                <option value="Laptop">Laptop</option>                            
                                <option value="Usb">Usb</option> 
                                <option value="Bateria">Bateria</option> 
                                <option value="Mouse">Mouse</option> 
                                <option value="Fuente de poder">Fuente de poder</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Detail" class="form-label">Detalle</label>                           
                            <select class="form-select" aria-label="Default select example" name="detail">                            
                                <option selected>Seleccione un Material</option>
                                <option value="Cobre">Cobre</option>                          
                                <option value="Plastico">Plastico</option>                            
                                <option value="Cables">Cables</option>
                                <option value="Aluminio">Aluminio</option>                            
                            </select>                            
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <a class="btn btn-primary" href="{{ url('/dispositivos')}}" >Cancelar</a>
                        </div>        
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
    
@endsection