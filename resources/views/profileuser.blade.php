<!-- HEADER -->
@include('/includes/head')
@include('/includes/nav')
@include('/includes/navprofile')


<!-- CUERPO -->
<div class="container-fluid mb-5 ">
    <div class="rounded-corners bg-white p-5 ml-5 mr-5 ">
        @if(auth()->user()->rol == 1)
        <div class="title-profile">
            <h2 class=" mb-4  pb-2 text-center">USUARIOS</h2>
        </div>
        <table class="table text-center m-auto" style="width: 95%;">
            <thead class="table-dark">   
                <tr>
                    <th scope="col" >id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Cuota</th>
                    <th scope="col">Email</th>
                    <th scope="col">Borrar</th>
                    </tr>
                </thead>     
                <tbody class="tbody-yellow">    
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->dni}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->cuota}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <button type="submit" class="btn-delete delete-user" data-id="{{ $user->id }}"><span class="fas fa-trash-alt" name='delete_user'></span></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else 
            <div>
                <h2 class="text-center m-5">No tiene los permisos.</h2>
            </div>
        @endif
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- FOOTER -->
@include('/includes/footer')