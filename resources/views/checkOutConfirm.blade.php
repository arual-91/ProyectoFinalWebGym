<!-- HEADER -->
@include('/includes/head')

<!-- CUERPO -->
<div class="container">
	
	<h2 class="text-white text-center m-5">PEDIDO CONFIRMADO</h2>
	<div class="form-group d-flex justify-content-center m-5">
		<img class="text-center" src={{ asset('imagenes/tienda/bag.png') }} style="height: 400px">
	</div>
	<div class="form-group d-flex justify-content-center m-5">
		<a href="/perfil/perfil" class="btn bg-yellow"> Volver </a>
	</div>
</div>

<!-- FOOTER -->
@include('/includes/footer')
      
