{{-- <div class="row border-warnig">
    <div class=" card col-md-8 border-warning">
        <div class="mt-2 table-responsive-md">
            <table class="table table-striped">
                <thead>
                    <tr class="bg-body">
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($productos as $pro)
                    <tr>
                        <td>{{$pro->id}}</td>
                        <td>{{$pro->name}}</td>
                        <td>{{$pro->description}}</td>
                        <td>{{$pro->quantity}}</td>
                        <td>{{$pro->price}}</td>
                        <td>
                            <button class="btn btn-warning"wire:click='edit({{$pro->id}})'>Editar</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" wire:click='destroy({{$pro->id}})'>Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$productos->links('pagination::Bootstrap-5')}}
        </div>
    </div>
    <div class="col-md-4">
        <div class="container ">     
            @include("livewire.$view")
        </div>
    </div>
</div>
 --}}
