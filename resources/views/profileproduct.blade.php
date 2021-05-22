<!-- HEADER -->
@include('/includes/header')
@include('/includes/nav')
@include('/includes/navprofile')

<!-- CUERPO -->
<div class="container">
    @if(auth()->user()->rol == 1)
        <h2 class="text-center text-white m-5">Productos</h2>
        <table class="table table-bordered table-striped table-light m-5">
            <thead  class="table-warning">
                <tr>
                <th scope="col" >id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">img</th>
                </tr>
            </thead>     
            <tbody>   
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td><img  class=""  src="/imagenes/tienda/{{$product->image}}.jpg" style="width:80px"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else 
        <div>
            <h2 class="text-center text-white m-5">No tiene los permisos.</h2>
        </div>
    @endif
</div>

<!-- FOOTER -->
@include('/includes/footer')