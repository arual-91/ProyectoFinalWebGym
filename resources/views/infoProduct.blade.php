<!-- HEADER -->
@include('/includes/head')
@include('/includes/nav')

<!-- CUERPO -->
<div class="container-fluid">
    <div class="container mt-5 mb-5">
		<div class=" rounded-corners bg-white m-1 p-5 ">
			<div class="row media">
				<img  class="col-4 pt-5 "  id="myImg" src="/imagenes/tienda/{{$product->image}}" >
				<!-- The Modal -->
				<div id="myModal" class="modal">
					<span class="close mt-5">&times;</span>
					<img class="modal-content" id="img01">
					<div id="caption"></div>
				</div>
				<div class="col">
					<div class="text-center pt-5">
						<h1><strong> {{$product->name}}</strong></h1>
					</div>
					<br>
					<article class="ml-4">
						<h4>DESCRIPCIÓN:</h4>
						<p style="font-size: 18px" >{{$product->description}}</p>
						<h1 class="price mt-5 mr-5 " style="font-size: 50px">{{$product->price}} €</h1>
						<div class="d-flex justify-content-end">
							@guest
								<a href="{{ route('login')}}" type="submit" class="btn bg-yellow mt-5">Comprar</a>
							@else 
								<form action="{{ route('checkout.index', $product) }}" method="POST">
									{{ csrf_field() }}
									<button type="submit" class="btn bg-yellow mt-5" >Comprar</button>
								</form>
							@endguest
						</div>
					</article>
				</div>
			</div>
			<a href="{{ url('/tienda') }}" class="boton-tarifa btn mt-5" ><span class="fas fa-long-arrow-alt-left" style="font-size: 23px"> </span> </a>
		</div>
	</div>	
</div>
<script>
	// Get the modal
	var modal = document.getElementById("myModal");
	
	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById("myImg");
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	img.onclick = function(){
	  modal.style.display = "block";
	  modalImg.src = this.src;
	  captionText.innerHTML = this.alt;
	}
	
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];
	
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	  modal.style.display = "none";
	}
	</script>
<!-- FOOTER -->
@include('/includes/footer')
      
