
   <!-- NAVEGADOR -->
<nav class="navbar navbar-expand-md fixed-top navbar-dark font-weight-bold">
    <div class="container-fluid">
            <ul class="nav navbar-nav ">
                    <li class="nav-item ">
                        <img class="img-fluid mr-4 m-1" src={{ asset('imagenes/logo.png') }} style="height: 60px">
                    </li> 
                @foreach ($navs as $menu)
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ URL::to('./'.strtolower(trim($menu))) }}">{{ $menu }}</a>
                    </li> 
                @endforeach
            </ul>  
            <ul class="nav navbar-nav ">    
                @guest
                    <a class="seccion" href="{{ route('login')}}" class="pull-left">Login</a> 
                    @else 
                    <a class="seccion-close text-yellow m-4" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar Sesion
                    </a>
                    <a class="seccion" href="{{ URL::to('./perfil')}}" >Mi Perfil</a>

                @endguest
            </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
    </div>
</nav>
    <!--  CABECERA -->
<section >
    <div class="containe" >
        <div class=" text-center pt-5 text-white" id="head">
            <img class="img-fluid pt-4" src={{ asset('imagenes/logo.png') }} style="height: 230px">
        </div>
    </div>
    <div class="info-gym row" style="background-color: rgb(77, 77, 77);font-size: 16px;">
        <div class="col-sm border-right border-white text-white ">
            <p class="m-2 text-center font-weight-bold">CUOTA  <br> SIN PERMANENCIA</p>
        </div>
        <div class="col-sm border-right border-white text-white">
            <p class="m-2 text-center font-weight-bold">PARKING <br> GRATUITO</p>
        </div>
        <div class="col-sm border-right border-white text-white">
            <p class="m-2 text-center font-weight-bold">AMPLIO HORARIO  <br> DE APERTURA</p>
        </div>
        <div class="col-sm border-right border-white text-white">
            <p class="m-2 text-center font-weight-bold">GRAN VARIEDAD DE  <br> ACTIVIDADES DIRIGIDAS</p>
        </div>
    </div>
</section>
