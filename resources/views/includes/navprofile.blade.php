
   <!-- NAVEGADOR PROFILE -->
<nav class="nav-profile">
            <ul>
                @foreach ($navsProfiles as $menu)
                    <li >
                        <a  href="{{ URL::to('./perfil/'.strtolower(trim($menu))) }}">{{ $menu }}</a>
                    </li> 
                @endforeach
            </ul>  
</nav>

