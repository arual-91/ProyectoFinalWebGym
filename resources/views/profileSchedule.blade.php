<!-- HEADER -->
@include('/includes/head')
@include('/includes/nav')
@include('/includes/navprofile')

<!-- CUERPO -->
<div class="container-fluid mb-5 ">
    <div class="rounded-corners bg-white p-5 ml-5 mr-5 ">
        @if(auth()->user()->rol == 1)
            <div class="row">
                <div  class="col">
                    <form action="{{ route('schedule.add_class') }}"  method="POST" class="m-3 row">
                        {{ csrf_field() }}
                        <select class="m-1" name="dates">
                            @foreach ($dates as $date)
                                <option value="{{$date->date }}">{{$day_week_es[(new DateTime($date->date))->format('w')-1] }} {{(new DateTime($date->date))->format('d/m/y')}}</option>
                            @endforeach
                        </select>
                        <select class="m-1" name="hours">
                            @foreach ($hours as $hour)
                                <option value="{{$hour->hour }}">{{$hour->hour }}</option>
                            @endforeach
                        </select>
                        <select class="m-1" name="Activities">
                            @foreach ($Activities as $Activities)
                                <option value="{{$Activities->id }}">{{$Activities->name }}</option>
                            @endforeach
                            <option value="null">Ninguna</option>
                        </select>
                        <input class="m-1 p-2" type="number" name="place" placeholder="Plazas..."  style="width:70px;" required/>
                        <button class="btn btn-filter ml-2" type="submit" name='create_product' style="width: 80px">Añadir</button> 
                    </form>
                </div>
                <div class="col-3 text-right mr-3">
                    @if ($last_day_of_week <= ($date_now)->format('Y-m-d'))
                        <form action="{{ route('schedule.update_schedule') }}" method="GET" >
                            {{ csrf_field() }}    
                            <button class="btn btn-danger " type="submit" name='create_product' style="width: 150px">Nuevo horario</button> 
                        </form>
                    @else
                        <button type="submit" class="btn btn-danger " style="width: 150px" disabled>Nuevo horario</button>
                    @endif
                </div>
            </div>
        @endif
        <div class="title-profile">
            <h2 class=" mb-4  text-center">HORARIO</h2>
        </div>
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="row" style="font-size: 16px;text-transform:uppercase">Hora</th>
                    @foreach ($dates as $date)
                        <th  style="text-transform:uppercase">
                           <span style="font-size: 16px">{{$day_week_es[(new DateTime($date->date))->format('w')-1] }}</span> <span style="font-size: 12px">{{(new DateTime($date->date))->format('d/m')}}</span>
                        </th>
                    @endforeach
                </tr>
            </thead>     
            <tbody >
                @foreach ($hours as $hour)
                    <tr>
                        <th scope="row">
                            {{$hour->hour}}
                        </th>
                        @foreach ($schedules as $class)
                            @if ($class->hour == $hour->hour )
                                <td>
                                    @if(is_null($class->activity))
                                        <p>-</p>
                                    @else
                                        <p style="font-size: 15px"><b>{{$class->activity}}</b></p>
                                        <p>
                                            <span class="num-ocupation">{{$class->occupation}}</span>
                                            /
                                            <span class="num-ocupation-max">{{$class->places}}</span>
                                        </p>
                                        @if ($class->date >= ($date_now)->format('Y-m-d'))
                                            @if ($class->occupation < $class->places )
                                                <button type="submit" class="btn btn-outline-warning btn-sm booking-class" data-id="{{ $class->id }}">Reservar</button>
                                            @else
                                                <p>LLENO</p>
                                            @endif
                                        @else
                                            <button type="submit" class="btn btn-secondary btn-lg btn-sm" disabled>Reservar</button>
                                        @endif
                                    @endif
                                </td>
                            @endif
                        @endforeach
                    </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>

<!-- FOOTER -->
@include('/includes/footer')