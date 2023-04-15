@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-warning">
                <div class="card-header border-warning">Actualizar Dispositivo</div>
                <div class="card-body">
                    <form  action="{{url('dispositivos/'.$dispositivo->id)}}" method="post">
                        @method('PUT')

                        @csrf
                        <div class="mb-3">
                            <table class="table ">
                                <tr class="table ">
                                    <td>Nombre</td>
                                    <td>Detalle</td>
                                </tr>
                                    <tr class="bg-warning">
                                        <td>{{$dispositivo->name}}</td>
                                        <td>{{$dispositivo->detail}}</td>
                                    </tr>    
                            </table>

                        </div>

                        <div>
                            <label for="Name" class="form-label">Nombre</label>
                            <select class="form-select" aria-label="Default select example" name="name">                            
                                <option selected>{{$dispositivo->name}}</option>
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
                                <option selected>{{$dispositivo->detail}}</option>
                                <option value="Cobre">Cobre</option>                          
                                <option value="Plastico">Plastico</option>                            
                                <option value="Cables">Cables</option>
                                <option value="Aluminio">Aluminio</option>                            
                            </select>                            
                        </div>

                        <div class="mb-3 ">
                            <button class="btn btn-warning" type="submit">Guardar</button>
                            <a class="btn btn-primary" href="{{ url('/dispositivos')}}" >Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection