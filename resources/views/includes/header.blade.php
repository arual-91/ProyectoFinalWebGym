<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset='UTF-8'>
    <title>Gym</title>
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <style>
        body{
            margin: 0;
            font-size: 13px;
            background: rgb(43, 43, 43);
        }
        
        footer  {
            background-color: black;
            padding: 5px;
            padding-top:20px ;
            padding-bottom:20px ;
            margin-bottom:0;
            
        }

        #head {
            background-color: rgb(252, 255, 214);
            background-position: center;
            border-bottom: black solid 1px;
            height:  280px;
            padding-top:30px 
        }
        
        .navbar {
            background-color: black;
            padding: 0;
        }
        
        .navbar-dark .navbar-nav .nav-link {
            color: white;
            padding: 25px;
            font-size: 14px;

        }

        .navbar-dark .navbar-nav a.nav-link:hover{
            background-color: rgb(239, 253, 46);
            color: black
        }

        a.seccion{
            text-decoration: none;
            color: rgb(244, 255, 85);
            margin-left: 5px;
            font-size: 16px;
            padding: 10px;
            margin: 6px;
            border:3px solid rgb(244, 255, 85);
            border-radius: 5px;
            box-shadow: inset 0 0 6px #FFFF00,
                        0 0 6px #FFFF00;
            
        }
        a.seccion:hover{
            box-shadow: inset 0 0 15px #FFFF00,
                        0 0 15px #FFFF00;
        }

        a.seccion-close{
            text-decoration: none;
        }
        a.seccion-close:hover{
            color: #FFFF00;
            text-shadow: 0 0 7px #ffffff;
        }

        .text-yellow{
            color:rgb(239, 253, 46);
        }

        .bg-yellow{
            background-color:rgb(239, 253, 46);
        }

        div.icons{
            font-size: 80px;
            padding-top: 10px;
            color: black;
            text-align: center;
        }

         div h2.title{
            background-color: black;
            padding: 6px;
            font-size: 17px;
            border-radius: 50px 0 50px 0;

        }


        div  .decription-tarifa{
            font-size: 15px;
        }

        div  .precio-tarifa{
            font-size: 55px;
            color: black
        }

        a.boton-tarifa{
            background-color: rgb(0, 0, 0);
            color: white;
            font-weight: bold;
            
        }

        a.boton-tarifa:hover{
            color: white;
            box-shadow:  0 0 10px white,
                        inset 0 0 5px white;               

        }

        div.motivation.row{
            background-color: rgb(239, 253, 46);
            margin: 0 50px 0 50px;
            border-radius: 20px;
        }

        .rounded-corners{
            border-radius: 20px;
            box-shadow: inset 0 0 15px 0 black;


        }

        a.social-item{
            font-size: 20px;
            background-color: rgb(239, 253, 46);
            color: black;
            margin-left: 15px;
            padding: 5px;
            text-decoration: none;
        }
        a.social-item:hover{
            background-color: white;
            color:black;
        }
        a.social-item-contac{
            font-size: 20px;
            background-color: black;
            color: rgb(239, 253, 46);
            margin-left: 15px;
            padding: 5px;
            text-decoration: none;
        }

        a.social-item-contac:hover{
            background-color: rgb(239, 253, 46);
            color:black;
        }

        div.info-gym.row{
            margin: 0;
        }

        .title-pag{
            background-color: black;
            color: white;
            padding:8px;
            font-size: 25px;
            border-radius: 50px 0 50px 0;
            border: white solid 3px;
            width: 400px;
            margin: auto;
            margin-bottom:30px; 
            box-shadow: inset 0 0 10px 0 #FFFF00,
            0 0 10px 0 #FFFF00;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.678);
            width: 500px;
            padding: 10px;
            margin: auto;
        }

        .m-auto{
            margin: auto;
        }
        
        h1.price{
            font-size: 30px;
            font-weight: bold;
            color: #FFFF00;
            -webkit-text-stroke: 1px black;
        }

        .search{
            width: 65%;
            height: 50px;
            background: #ffffff;
            border: none;
            font-size: 10pt;
            padding-left: 15px;
            border-radius: 5px;
        }

        .order{
            width: 22%;
            height: 50px;
            background: #ffffff;
            border: none;
            font-size: 10pt;
            padding-left: 15px;
            border-radius: 5px;
        }

        .btn-filter{
            width: 10%;
            height: 50px;
            color: rgb(0, 0, 0);
            background-color: #FFFF00;
            box-shadow: inset 0 0 5px white; 
            border-radius: 5px;
        }

        
     </style>
</head>
<body class="d-flex flex-column min-vh-100">
