<div class="row border-warnig">
    <div class=" card col-md-8 border-warning">
        <div class="mt-2 table-responsive-md">
            <table class="table table-striped">
                <thead>
                    <tr class="bg-body">
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Detalle</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($dispositivo as $dis)
                    <tr>
                        <td>{{$dis->id}}</td>
                        <td>{{$dis->name}}</td>
                        <td>{{$dis->detail}}</td>
                        <td>
                            <button class="btn btn-warning text-white"wire:click='edit({{$dis->id}})'>Editar</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger text-white" wire:click='destroy({{$dis->id}})'>Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$dispositivo->links('pagination::Bootstrap-5')}}
        </div>
    </div>
    <div class="col-md-4">
        <div class="container ">
            @include("livewire.$view")
        </div>
    </div>
</div>

