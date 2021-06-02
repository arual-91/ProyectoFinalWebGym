<!-- HEADER -->
@include('/includes/header')
@include('/includes/nav')
@include('/includes/navprofile')

<!-- CUERPO -->
<div class="container-fluid mb-5 ">
    <div class="rounded-corners bg-white p-5 ml-5 mr-5 ">
        @if(auth()->user()->rol == 1)
        <div class="title-profile">
            <h2 class=" mb-4  pb-2 text-center">PRODUCTOS</h2>
        </div>        
        <p class="file-name text-white"></p>
            <form action="{{ route('profile.create_product') }}" enctype="multipart/form-data" method="POST" class="m-5 row">
                {{ csrf_field() }}
                <div class="file-input mr-2 ">
                    <input type="file" id="file" name="urlfoto" class="file" required>
                    <label for="file" class="text-btn text-center">Select image </label>
                </div>
                <input class="input-format mr-2" type="text" name="name" placeholder="NOMBRE..." required/>
                <input class="input-format mr-2" type="text" id="description" name="description" placeholder="DESCRIPCION..." required/>
                <input class="input-format mr-2" type="number" id="precio" name="price" placeholder="PRECIO..." required/>
                <button class="btn btn-filter mr-2" type="submit" name='create_product' >Añadir</button> 
            </form>
              
            <table class="table text-center m-auto " style="width: 95%;">
                <thead class="table-dark">   
                    <tr>
                    <th scope="col" >id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">img</th>
                    <th scope="col">Borrar</th>
                    </tr>
                </thead>     
                <tbody class="tbody-yellow">   
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td><img  class=""  src="/imagenes/tienda/{{$product->image}}" style="width:80px"></td>
                            <td>
                                <form action="{{ route('profile.delete_product', $product) }}" method="POST" class="m-2">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn-delete"><span class="fas fa-trash-alt" name='delete_product'></span></button>
                                </form>
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
<script>
    const file = document.querySelector('#file');
    file.addEventListener('change', (e) => {
    document.querySelector('.text-btn').textContent ="1 Archivo Seleccionado";
});
</script>

<!-- FOOTER -->
@include('/includes/footer')