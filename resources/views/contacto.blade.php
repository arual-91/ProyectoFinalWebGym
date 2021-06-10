<!-- HEADER -->
@include('/includes/head')
@include('/includes/nav')

<!-- CUERPO -->
<div class="container mt-5">
    <div class="title-pag " >
        <h2 class=" text-center font-weight-bold">CONTACTO</h2>
    </div>
    <div class="row mt-5 mb-4">
        <!-- INFORMACION CONTACTO -->
        <div class="col-lg-3 mt-4">
            <ul class="p-0" style="list-style: none; ">
                <li class="mt-4 ">
                    <span class="text-yellow text-uppercase t">Horario:</span ><span class="text-white"><br> Lunes - Sábado <br> 10:00 - 21:00</span></li>
                <li class="mt-4 ">
                    <span class="text-yellow text-uppercase t">Email:</span ><span class="text-white"><br> gyms.fitness.club@gmail.com</span></li>
                <li class="mt-4 ">
                    <span class="text-yellow text-uppercase ">Telefono:</span><br><span class="text-white"> 959 66 56 56</span>
                </li>
                <li class="mt-4 ">
                    <span class="text-yellow text-uppercase ">Direccion:</span><br><span class="text-white"> Calle del Deportista, 21<br> 07004 - Palma<br> España  </span>
                </li>
                <li class="mt-4 ">
                    <span class="text-yellow text-uppercase "> REDES SOCIALES:</span><br><br>
                    <a href="#" class="social-item-contac rounded-circle "><span class="icon-twitter m-1"></span></a>
                    <a href="#" class="social-item-contac rounded-circle "><span class="icon-instagram m-1"></span></a>
                    <a href="#" class="social-item-contac rounded-circle "><span class="icon-facebook-sign m-1"></span></a>
                </li>
            </ul>
        </div>
        <!-- FORMULARIO CONTACTO -->
        <div id="formulario" class="col container pt-5 mt-4 rounded-corners mb-5 " style="background-color:white">
            <section id="formulario  " >
                <h1 class="ml-4"><strong> ENVIAR MAIL: </strong></h1>

                <form action="" method="post" class="p-4 mb-4 ml-2 mr-2 " >
                    {{csrf_field()}}
                    <!-- TITULO -->
                    <div class="form-group pt-2">
                        <input type="email" class="form-control " placeholder="Indica aqui tu email" name="email" required>
                    </div>
                    <!-- CUERPO -->
                    <div class="form-group">
                        <textarea class="form-control" rows="7" placeholder="Escribe aqui tu mensaje" name="cuerpo" required></textarea>
                    </div>
                    <!-- BOTON -->
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit" class="btn bg-yellow  mt-2">Enviar</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

<!-- FOOTER -->
@include('/includes/footer')