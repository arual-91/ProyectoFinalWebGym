<!-- HEADER -->
@include('/includes/header')
@include('/includes/nav')
@include('/includes/navprofile')

<!-- CUERPO -->
<div class="container">
    @if(auth()->user()->rol == 1)
        <h2 class="text-center text-white m-5">Ventas</h2>
        <table class="table table-bordered table-striped table-light m-5">
            <thead  class="table-warning">
                <tr>
                <th scope="col" >id</th>
                <th scope="col">id Producto</th>
                <th scope="col">id Usuario</th>
                </tr>
            </thead>     
            <tbody>   
                @foreach ($sales as $sale)
                    <tr>
                        <th scope="row">{{$sale->id}}</td>
                        <td>{{$sale->product_id}}</td>
                        <td>{{$sale->user_id}}</td>
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