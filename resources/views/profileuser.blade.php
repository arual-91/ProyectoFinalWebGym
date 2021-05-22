<!-- HEADER -->
@include('/includes/header')
@include('/includes/nav')
@include('/includes/navprofile')

<!-- CUERPO -->
<div class="container">
    @if(auth()->user()->rol == 1)
        <h2 class="text-center text-white m-5">Usuarios</h2>
        <table class="table table-bordered table-striped table-light m-5">
            <thead  class="table-warning">
                <tr>
                <th scope="col" >id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">DNI</th>
                <th scope="col">Direccion</th>
                <th scope="col">Cuota</th>
                <th scope="col">Email</th>
                </tr>
            </thead>     
            <tbody>   
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->dni}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->cuota}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else 
        <div>
            <h2 class="text-center text-white m-5">No tiene los permisos.</h2>
        </div>
    @endif
</div>

<!-- FOOTER -->
@include('/includes/footer')