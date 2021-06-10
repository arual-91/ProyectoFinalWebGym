<!-- HEADER -->
@include('/includes/head')
@include('/includes/nav')

<!-- CUERPO -->
<div class="container-fluid">
    <div class="container mt-5 mb-5">
        <div class="title-pag " >
            <h2 class=" text-center font-weight-bold">TIENDA</h2>
        </div>
        <form action="{{ url('/tienda/search') }}" method="GET" class="m-4">
            {{ csrf_field() }}
            <input class="search mr-2" type="text" name="search" placeholder="Buscar.." />
            <select class="order mr-2"  name="order" id="input">
                <option value="Asc">Precio Ascendente</option>
                <option value="Dec">Precio Decendente</option>
            </select>
            <button class="btn btn-filter mr-2" type="submit">Filtrar</button>
        </form>
        @if($products->isNotEmpty())
            @foreach ($products as $product)
            <div class=" rounded-corners bg-white m-1 p-4 ">
                <div class="media row">
                    <div class="media-left col-2 m-1">
                        <img src="/imagenes/tienda/{{$product->image}}" class="media-object border border-dark mr-3 p-3" style="width:150px">
                    </div>
                    <div class="media-body m-3 col-8 align-self-center ">
                        <h4 class="media-heading text-uppercase ">{{$product->name}}</h4>
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="text-center col-2  align-self-center ">
                        <h1 class="price mb-3">{{$product->price}} €</h1>
                        <a class="boton-tarifa btn " href="{{ url('/tienda') }}/{{$product->id}}">Comprar</a>  
                    </div> 
                </div>
            </div>
            @endforeach
        @else 
            <div>
                <h2>No se ha encontrado el producto.</h2>
            </div>
        @endif
    </div>
</div>

<!-- FOOTER -->
@include('/includes/footer')