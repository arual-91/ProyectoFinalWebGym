<!-- HEADER -->
@include('/includes/header')
@include('/includes/nav')

<!-- CUERPO -->
<div class="container mt-5">
    <div class="title-pag " >
        <h2 class=" text-center font-weight-bold">ACTIVIDADES</h2>
    </div>
    <div class="m-5 p-5 bg-white rounded-corners">
        @foreach ($activities as $activitie)
            <div class="row  mb-3 mt-3 p-3">
                <div class="col-3 align-self-center">
                    <img src="/imagenes/activities/{{$activitie->image}}" class=" " style="width:230px">
                </div>
                <div class="col-6 pl-5">
                    <h4 class="">{{$activitie->name}}</h4>
                    <p class="m-0">{{$activitie->description}}</p>
                </div>
                <div class="col-3 align-self-center ">
                    <div class="bg-dark text-white align-self-center rounded">
                        <p class="text-center p-3 m-0"><label><b>Intensidad: </b></label> {{$activitie->intensity}}<br>
                        <label><b>Gasto Calorico: </b></label> {{$activitie->calories}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- FOOTER -->
@include('/includes/footer')