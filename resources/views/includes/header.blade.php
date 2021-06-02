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

        .title-pag h2{
            font-size: 60px;
            margin-bottom: 40px;
            color: #ffffff;
            letter-spacing: .1em;
            font-weight: bold;
            text-shadow: 
            0 -1px 0 rgb(255, 255, 254), 
            0 1px 3px #636363, 
            0 2px 3px #6d6d6d, 
            0 3px 3px #494949, 
            0 4px 3px #282828, 
            0 5px 3px #262626, 
            0 6px 3px #242424, 
            0 7px 3px #1e1e1e, 
            0 8px 3px #1e1e1e, 
            0 9px 3px #1e1e1e, 
            0 10px 3px #111111, 
            0 11px 3px #111111, 
            0 12px 3px #111111, 
            0 13px 3px #000000, 
            0 14px 3px #000000, 
            0 15px 3px #000000, 
            0 20px 15px rgb(78, 78, 78);
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
            width: 8%;
            height: 50px;
            border-radius: 25px;
            background: #fffb00;
            box-shadow: 0 4px 7px rgba(0, 0, 0, 0.4);
            color: black;
            background-color: #FFFF00;
            font-weight: bold;
            transition: transform .2s ease-out;
            
        }
        .btn-filter:hover{
            transform: scale(1.02);
            color: black;
        }

        .tbody-yellow tr:nth-child(even){
            background: #ffffff;
        }
        .tbody-yellow tr:nth-child(odd){
            background: #faffd3;
        }

        h2.title-profile{
            text-shadow: 0 0 5px  #FFFF00;
            -webkit-text-stroke: 1px rgb(73, 73, 73);
            font-size: 50px;
          
        }

        .card-profile{
            border-radius: 20px 20px 0 0;
            background-color: #feffad;
            padding: 20px;
        }

        .card-profile-name{
            font-size: 20px;
            font-weight: bold;
            text-shadow: 0 0 5px  #fffb00;
        }

        .card{
            border: 1px solid #313131;
            border-radius: 20px ;
            font-size: 16px;
            padding: 0;
        }

        nav.nav-profile ul li a{
            color: rgb(255, 255, 255);
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            padding: 18px;
        }

        nav.nav-profile ul li{
            float: left;
            margin: 0px 10px 0 10px;
            
        }

        nav.nav-profile ul{
            list-style: none;
            display: inline-block;
            padding:18px;
            margin: 0;
        }

        nav.nav-profile{
            text-align: center;
        }
        nav.nav-profile ul li a:hover{
            background-color: white;
            color: #000000;
        }

        .input-format{
            width: 15%;
            height: 50px;
            background: #ffffff;
            border: none;
            padding-left: 15px;
            border-radius: 5px;
            border: 1px solid black;
        }
        #precio{
            width: 8%;
        }

        #description{
            width: 53%;
        }
        #intensity{
            width: 10%;
        }
        #calories{
            width: 10%;
        }
        #description-activity{
            width: 40%;
        }


        .file {
            opacity: 0;
            width: 0;
            height: 0;

        }
        .file-input  {
            width: 12%;
            height: 50px;
        }

        .file-input label {
            height: 50px;
            border-radius: 25px;
            background: #fffb00;
            box-shadow: 0 4px 7px rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            color:black;
            font-weight:bold;
            cursor: pointer;
            transition: transform .2s ease-out;
            margin-top: -20px 
            
        }

        input:hover + label,
        input:focus + label {
            transform: scale(1.02);
        }

       .btn-delete{
            text-decoration: none;
            padding: 8px;
            font-weight: 600;
            font-size: 15px;
            color: #ffffff;
            background-color: hsl(0, 100%, 62%);
            border-radius: 8px;
            border: none;

       }
       .btn-delete:hover{
            color: #ffffff;
            background-color: #ac0000;
       }

    .title-profile {
        color: #1d1d1d;
        letter-spacing: .05em;
        text-shadow: 
        2px 2px 1px #ffffff, 
        6px 6px 1px rgba(0, 0, 0, 0.342);
    }
    .title-profile h2{ 
        font-size: 55px;
        font-weight: bold;
   }

     </style>
</head>
<body class="d-flex flex-column min-vh-100">
