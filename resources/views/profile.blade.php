<!-- HEADER -->
@include('/includes/header')
@include('/includes/nav')
@include('/includes/navprofile')

<!-- CUERPO -->
<div class="container-fluid mb-5 pl-5 pr-5">
    <div class="rounded-corners bg-white row p-4 ml-5 mr-5">
        <div class="card col-3">
            <div class="text-center card-profile  ">
                <p class="card-profile-img ">
                    <img class="border rounded-circle" src={{ asset('imagenes/profile/profile.png') }} style="height:170px">
                </p>
                <p class="card-profile-name" >{{ auth()->user()->name}} {{ auth()->user()->last_name}}</p>
            </div>
            <div class="p-2 pl-4 m-4">
                <label class="font-weight-bold">DNI: </label> 
                <p>{{ auth()->user()->dni}}</p>
                <label class="font-weight-bold">Direccion: </label> 
                <p>{{ auth()->user()->address}}</p>
                <label class="font-weight-bold">Cuota: </label>
                <p>{{ auth()->user()->cuota}}</p>
                <label class="font-weight-bold">Email: </label>
                <p>{{ auth()->user()->email}}</p>
                <label class="font-weight-bold">IBAN: </label>
                <p >{{ $iban}}</p>
            </div>  
        </div>
        <div class="col mt-5 mb-5 m-4 pl-5">
            <div class=" ">
                <h2 class="mb-4 pt-3">Actividades Reservadas:</h2>
                <table class="table ">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col" >Actividad</th>
                        <th scope="col">Dia</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Cancelar</th>
                        </tr>
                    </thead>
                    <tbody>       
                            @if(count($bookings) == 0)
                                <td><b>NO HAY ACTIVIDADES RESERVADAS.</b></td>
                            @else
                                @foreach ($bookings as $booking)
                                    <tr>
                                        <td>{{$booking->name}}</td>
                                        <td>{{$day_week_es[(new DateTime($booking->date))->format('w')-1] }} {{(new DateTime($booking->date))->format('d/m/Y')}}</td>
                                        <td>{{$booking->hour}}</td>
                                        <td>
                                            <form action="{{ route('schedule.delete_booking', $booking->id_booking ) }}" method="POST" class="text-right mr-3" >
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm ">Cancelar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                    </tbody>
                </table>
            </div>
            <div class=" ">
                <h2 class="mb-4 pt-3">Mis Pedidos:</h2>
                <table class="table ">
                    <thead class="thead-dark ">
                        <tr>
                        <th scope="col" >Nº Pedido</th>
                        <th scope="col">Fecha y Hora</th>
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Direccion Envio</th>
                        <th scope="col">Cancelar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($orders) == 0)
                                <td><b>NO HA REALIZADO NINGUN PEDIDO.</b></td>
                        @else
                            @foreach ($orders as $order)
                                <tr>
                                    <th scope="row">{{$order->id}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>{{$order->name_product}}</td>
                                    <td style="width: 80px">{{$order->price}} €</td>
                                    <td>{{$order->shipping_address}}</td>
                                    <td>
                                        @if($order->created_at > $time_out)
                                            <form action="{{ route('profile.delete_order', $order) }}" method="POST" class="m-2">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn-delete btn-sm"><span class="fas fa-trash-alt" name='delete_product'></span></button>
                                            </form>
                                        @endif       
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <p class="mt-5 mb-5">***Solo se podran eliminar pedidos con una hora de antelacion.</p>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
@include('/includes/footer')