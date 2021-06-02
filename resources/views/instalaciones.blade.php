<!-- HEADER -->
@include('/includes/header')
@include('/includes/nav')

<!-- CUERPO -->
<div class="container mb-5 pb-4 mt-5">
    

    <!-- section 4 - IMAGENES - carousel -->
            <div class="title-pag " >
                <h2 class=" text-center">INSTALACIONES</h2>
            </div>

            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicadores -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                    <li data-target="#demo" data-slide-to="4"></li>
                </ul>

                <!-- Las Imagenes -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src={{ asset('imagenes/instalaciones4.jpg') }} alt="Los Angeles" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Fitness</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src={{ asset('imagenes/instalaciones5.jpg') }} alt="Chicago" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Fitness</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src={{ asset('imagenes/instalaciones3.jpg') }} alt="New York" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Vestuarios</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src={{ asset('imagenes/instalaciones2.jpg') }} alt="New York" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Sala de Actividades</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src={{ asset('imagenes/instalaciones1.jpg') }} alt="New York" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Sala de spining/ciclo indoor</h3>
                        </div>
                    </div>


                </div>

                <!-- controles :  Left and right -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>


</div>

<!-- FOOTER -->
@include('/includes/footer')