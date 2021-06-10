<!-- HEADER -->
@include('/includes/head')

<!-- CUERPO -->
<div class="container-fluid">
    <div class="container mt-5 mb-5">
		<div class=" rounded-corners bg-white m-1 p-5 ">
			<section class="section-pagetop bg-dark">
				<div class="container clearfix">
					<h2 class="text-center text-white">Checkout</h2>
				</div>
			</section>
			<section class="section-content bg padding-y">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							@if (Session::has('error'))
								<p class="alert alert-danger">{{ Session::get('error') }}</p>
							@endif
						</div>
					</div>
					
					<form action="{{ route('checkout.store', $product) }}" method="POST">
						@csrf
						<div class="row">
							<div class="col-md-8">
								<div class="card">
									<header class="card-header">
										<h4 class="card-title mt-2"> Detalles de facturación
										</h4>
									</header>
									<article class="card-body">
										<div class="form-row">
											<div class="col form-group">
												<label>Nombre</label>
												<h5>{{ auth()->user()->name }}</h5>
											</div>
											<div class="col form-group">
												<label>Apellido</label>
												<h5>{{ auth()->user()->last_name }}</h5>
											</div>
											<div class="col form-group ">
												<label>Telefono</label>
												<h5>{{ auth()->user()->phone }}</h5>
											</div>
										</div>
										<div class="form-row">
											<div class="col form-group">
												<label>Email</label>
												<h5>{{ auth()->user()->email }}</h5>
											</div>
											<div class="col form-group">
												<label>IBAN</label>
												<h5> {{ $iban}}</h5>
											</div>
										</div>
										<div class="form-group">
											<label>Direccion</label>
											<input type="text" class="form-control" name="address" value="{{ auth()->user()->address }}">
										</div>
									</article>
								</div>
							</div>
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-12">
										<div class="card">
											<header class="card-header">
												<h4 class="card-title mt-2">Tu Pedido</h4>
												<p>{{$product->name}}</p>

											</header>
											<article class="card-body">
												<dl class="dlist-align">
													<dt>Total cost: {{$product->price}}€</dt>
													<dd class="text-right h5 b"> </dd>
												</dl>
											</article>
										</div>
									</div>
									<div class="col-md-12 mt-4">
											<button type="submit" class="subscribe btn btn-success btn-sm btn-block" onclick="return confirm('Estas seguro?')">Realizar pedido</button>
											<a href="{{ url()->previous() }}" onclick="return confirm('Estas seguro?')" class="subscribe btn btn-danger btn-sm btn-block" > Cancelar</a>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</section>
		</div>
	</div>	
</div>
        

<!-- FOOTER -->
@include('/includes/footer')
      
