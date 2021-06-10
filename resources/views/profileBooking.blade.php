<!-- HEADER -->
@include('/includes/head')
@include('/includes/nav')
@include('/includes/navprofile')

<!-- CUERPO -->
<div class="container-fluid mb-5 ">
    <div class="rounded-corners bg-white p-5 ml-5 mr-5 ">
        @if(auth()->user()->rol == 1)
            <div class="title-profile">
                <h2 class=" mb-4  pb-2 text-center">ACTIVIDADES RESERVADAS</h2>
            </div>
            <table class="table text-center m-auto" style="width: 95%;">
                <thead class="table-dark">    
                    <tr>
                        <th scope="col" >ID reserva</th>
                        <th scope="col" >Usuario</th>
                        <th scope="col" >Email</th>
                        <th scope="col" >Telefono</th>
                        <th scope="col" >Actividad</th>
                        <th scope="col">Dia</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Cancelar</th>
                    </tr>
                </thead>     
                <tbody class="tbody-yellow">   
                    @foreach ($bookings as $booking)
                        @if($booking->date == ($date_now)->format('Y-m-d'))
                            <tr style="background-color: rgb(255, 244, 148)">
                        @else 
                            <tr>
                        @endif
                            <td>{{$booking->id_booking}}</td>
                            <td>{{$booking->name_user}} {{$booking->last_name_user}}</td>
                            <td>{{$booking->email}} </td>
                            <td>{{$booking->phone}} </td>
                            <td>{{$booking->name}}</td>
                            <td>{{$day_week_es[(new DateTime($booking->date))->format('w')-1] }} {{(new DateTime($booking->date))->format('d/m/Y')}}</td>
                            <td>{{$booking->hour}}</td>
                            <td>
                                <button type="submit" class="btn btn-danger btn-sm delete-booking" data-id="{{ $booking->id_booking }}"><span class="fas fa-trash-alt" name='delete_product'></button>
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
<script src="{{ asset('js/app.js') }}"></script>

<!-- FOOTER -->
@include('/includes/footer')