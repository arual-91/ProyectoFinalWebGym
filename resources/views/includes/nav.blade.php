
   <!-- NAVEGADOR -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark font-weight-bold">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                @foreach ($navs as $menu)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('./'.strtolower(trim($menu))) }}">{{ $menu }}</a>
                    </li> 
                @endforeach
            </ul>  
    </div>
            <ul class="nav  mr-2">  
            
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
 
</nav>
    <!--  CABECERA -->
<section >
    <div class="containe" >
        <div class=" text-center pt-5 text-white" id="head">
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
