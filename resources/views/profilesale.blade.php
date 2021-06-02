<!-- HEADER -->
@include('/includes/header')
@include('/includes/nav')
@include('/includes/navprofile')

<!-- CUERPO -->
<div class="container-fluid mb-5 ">
    <div class="rounded-corners bg-white p-5 ml-5 mr-5 ">
        @if(auth()->user()->rol == 1)
            <div class="title-profile">
                <h2 class=" mb-4  pb-2 text-center">VENTAS</h2>
            </div>
            <table class="table text-center m-auto" style="width: 95%;">
                <thead class="table-dark">    
                    <tr>
                    <th scope="col" >Nº Pedido</th>
                    <th scope="col">Fecha y Hora</th>
                    <th scope="col">id Producto</th>
                    <th scope="col">Nombre Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">id Usuario</th>
                    <th scope="col">Nombre Usuario</th>
                    <th scope="col">Direccion Envio</th>
                    </tr>
                </thead>     
                <tbody class="tbody-yellow">   
                    @foreach ($sales as $sale)
                        <tr>
                            <th scope="row">{{$sale->id}}</td>
                            <td>{{$sale->created_at}}</td>
                            <td>{{$sale->product_id}}</td>
                            <td>
                                @if(is_null($sale->name_product))
                                    Producto Borrado
                                @else
                                    {{$sale->name_product}}
                                @endif
                            </td>
                            <td style="width: 80px">{{$sale->price}} €</td>
                            <td>{{$sale->user_id}}</td>
                            <td>
                                @if(is_null($sale->name_user))
                                    Usuario Borrado
                                @else
                                    {{$sale->name_user}}
                                @endif
                            </td>
                            <td>{{$sale->shipping_address}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else 
            <div>
                <h2 class="text-center m-5">No tiene los permisos.</h2>
            </div>
        @endif
    </div>
</div>

<!-- FOOTER -->
@include('/includes/footer')