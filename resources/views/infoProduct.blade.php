<!-- HEADER -->
@include('/includes/header')
@include('/includes/nav')

<!-- CUERPO -->

<div class="container-fluid">
    <div class="container mt-5 mb-5">
		<div class=" rounded-corners bg-white m-1 p-5 ">

			<div class="row media">
				<img  class="col-4 pt-5 "  src="/imagenes/tienda/{{$product->image}}" >
				<div class="col">
					<div class="text-center pt-5">
						<h1><strong> {{$product->name}}</strong></h1>
					</div>
					<br>
					<article class="ml-4">
						<h4>DESCRIPCION:</h4>
						<p >{{$product->description}}</p>
						<h1 class="price mt-5 mr-5 " style="font-size: 50px">{{$product->price}} €</h1>
						<div class="d-flex justify-content-end">
							@guest
								<a href="{{ route('login')}}" type="submit" class="btn bg-yellow mt-5">Comprar</a>
							@else 
								<form action="{{ route('checkout.index', $product) }}" method="POST">
									{{ csrf_field() }}
									<button type="submit" class="btn bg-yellow mt-5">Comprar</button>
								</form>
							@endguest
						</div>
						 
					</article>
				</div>
			</div>
			<a href="{{ url('/tienda') }}" class="boton-tarifa btn mt-5" ><span class="fas fa-long-arrow-alt-left"> </span> VOLVER</a>
			

		</div>
	</div>	
</div>
        

<!-- FOOTER -->
@include('/includes/footer')
      
