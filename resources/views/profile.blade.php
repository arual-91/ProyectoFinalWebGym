<!-- HEADER -->
@include('/includes/header')
@include('/includes/nav')
@include('/includes/navprofile')

<!-- CUERPO -->
<div class="container">
    <div class=" rounded-corners bg-white m-5 p-5">
        <h2 class="text-center pb-5">Bienvenid@ {{ auth()->user()->name}}</h2>
        <div class="row">
            <div class="col">
                <p class="">
                    <label class="font-weight-bold">Nombre: </label> {{ auth()->user()->name}}
                </p>
                <p class="">
                    <label class="font-weight-bold">Apellidos: </label> {{ auth()->user()->last_name}}
                </p>
                <p class="">
                    <label class="font-weight-bold">DNI: </label> {{ auth()->user()->dni}}
                </p>
            </div>
            <div class="col">
                <p class="">
                    <label class="font-weight-bold">Direccion: </label> {{ auth()->user()->address}}
                </p>
                <p class="">
                    <label class="font-weight-bold">Cuota: </label> {{ auth()->user()->cuota}}
                </p>
                <p class="">
                    <label class="font-weight-bold">Email: </label> {{ auth()->user()->email}}
                </p>
                <p class="">
                    <label class="font-weight-bold">IBAN: </label> {{ $iban}}
                </p>
            </div>
        </div>  
    </div>
</div>

<!-- FOOTER -->
@include('/includes/footer')