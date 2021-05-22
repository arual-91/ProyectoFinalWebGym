<!-- HEADER -->
@include('/includes/header')
@include('/includes/nav')

<!-- CUERPO -->

<div class="container-fluid">
    <div class="container mt-5 mb-5">
		<div class=" rounded-corners bg-white m-1 p-5 ">

			<div class="row media">
				<img  class="col-4 pt-5 "  src="/imagenes/tienda/{{$products->image}}.jpg" >
				<div class="col">
					<div class="text-center pt-5">
						<h1><strong> {{$products->name}}</strong></h1>
					</div>
					<br>
					<article class="ml-4">
						<h4>DESCRIPCION:</h4>
						<p >{{$products->description}}</p>
						<h1 class="price mt-5 mr-5 " style="font-size: 50px">{{$products->price}} €</h1>

						<div class="d-flex justify-content-end">
							<form action="{{ url('/tienda') }}" method="post">
								{{csrf_field()}}
								<a class="btn bg-yellow mt-5" >COMPRAR!!</a>
							</form>
						</div>
						 
					</article>
				</div>
			</div>
			<a href="{{ url('/tienda') }}" class="boton-tarifa btn mt-5"> Volver </a>
			

		</div>
	</div>	
</div>
        

<!-- FOOTER -->
@include('/includes/footer')
      
