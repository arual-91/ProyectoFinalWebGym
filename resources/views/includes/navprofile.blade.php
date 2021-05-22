
   <!-- NAVEGADOR PROFILE -->
<nav class="navbar navbar-expand-md">
    <div class="container-fluid">
            <ul class="nav navbar-nav ">
                @foreach ($navsProfiles as $menu)
                    <li class="nav-item ">
                        <a class="nav-link text-warning font-weight-bold" href="{{ URL::to('./perfil/'.strtolower(trim($menu))) }}">{{ $menu }}</a>
                    </li> 
                @endforeach
            </ul>  
    </div>
</nav>

