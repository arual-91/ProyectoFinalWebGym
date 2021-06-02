<!-- HEADER -->
@include('/includes/header')
@include('/includes/nav')

<!-- CUERPO -->

<div class="container mt-5 mb-5 pb-4">

    <div class="title-pag " >
        <h2 class=" text-center font-weight-bold">TARIFAS</h2>
    </div>

    <div class="tarifa motivation row " >
        <div class="col-sm border-right border-dark">
            <h2 class="title m-4 text-center font-weight-bold text-white">CUOTA MENSUAL</h2>
            <h5 class="precio-tarifa m-4 text-center ">25€</h5>
            <p class="decription-tarifa m-4 text-center ">SALA DE MUSCULACION, ZONA DE CARDIO Y ACTIVIDADES DIRIGIDAS INCLUIDAS</p>
            <div class="text-center">
                <a class="boton-tarifa btn mb-4" href="{{ URL::to('./register')}}">ME APUNTO!</a>  
            </div>            
        </div>
        <div class="col-sm border-right border-dark">
            <h2 class="title m-4 text-center font-weight-bold text-white">CUOTA TRIMESTRAL</h2>
            <h5 class="precio-tarifa m-4 text-center ">60€</h5>
            <p class="decription-tarifa m-4 text-center ">SALA DE MUSCULACION, ZONA DE CARDIO Y ACTIVIDADES DIRIGIDAS INCLUIDAS</p> 
            <div class="text-center">
                <a class="boton-tarifa btn mb-4" href="{{ URL::to('./register')}}">ME APUNTO!</a>  
            </div>     
        </div>
        <div class="col-sm ">
            <h2 class="title m-4 text-center font-weight-bold text-white">CUOTA ANUAL</h2>
            <h5 class="precio-tarifa m-4 text-center ">200€</h5>
            <p class="decription-tarifa m-4 text-center ">SALA DE MUSCULACION, ZONA DE CARDIO Y ACTIVIDADES DIRIGIDAS INCLUIDAS</p>    
            <div class="text-center">
                <a class="boton-tarifa btn mb-4" href="{{ URL::to('./register')}}">ME APUNTO!</a>  
            </div>            
        </div>
    </div>

</div>

<!-- FOOTER -->
@include('/includes/footer')