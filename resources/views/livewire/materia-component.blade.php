<div class="row border-warnig">
    <div class=" card col-md-8 border-warning">
        <div class="mt-2 table-responsive-md">
            <table class="table table-striped">
                <thead>
                    <tr class="bg-body">
                        <th>Id</th>
                        <th>Materia</th>
                        <th>Calificacion</th>
                        <th>Estado</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materias as $mat)
                    <tr>
                        <td>{{$mat->id}}</td>
                        <td>{{$mat->materia}}</td>
                        <td>{{$mat->calificacion}}</td>
                        <td>{{$mat->estado}}</td>
                        <td>
                            <button class="btn btn-warning"wire:click='edit({{$mat->id}})'>Editar</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" wire:click='destroy({{$mat->id}})'>Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody> 
            </table>
            {{$materias->links('pagination::Bootstrap-5')}}
        </div>
    </div>
    <div class="col-md-4">
        <div class="container ">     
            @include("livewire.$view")
        </div>
    </div>
</div>
