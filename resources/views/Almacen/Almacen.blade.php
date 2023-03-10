<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- icono -->
    <link rel="icon"  href="https://image.flaticon.com/icons/png/512/1047/1047277.png">

    <title>Almacen</title>
    <!-- stylo fondo y letra pagina -->
    <style type="text/css">
    
      body {
        
         background-image: url(https://static.vecteezy.com/system/resources/previews/000/588/660/non_2x/abstract-blur-gradient-background-with-trend-pink-purple-violet-and-blue-colors-for-deign-concepts-wallpapers-web-presentations-and-prints-vector-illustration.jpg);
         background-repeat:no-repeat;
         background-size:100% 100%;
         background-attachment: fixed;
         font-family:'Permanent Marker', cursive;  

  }
     
     small{
      background-color: black;
     }

     header{
       background-color: black;
     }

     h1{    
    color:  darkturquoise; }

    center{ 
       color:  black; }

    .ewk_cont_banner{

    border: 2px solid purple;
    width: 80%;
    height: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size:cover;
  
    background-image: url("https://img.freepik.com/vector-gratis/fondo-mancha-acuarela-color-pastel_52683-12281.jpg?size=626&ext=jpg");
    }
    .ew_cont_banner{

border: 0px solid rgba(0, 0, 0, 0);
width: 80%;
height: 100%;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size:cover;
}

  </style>  
  

  <body>
    <!-- barra -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-light" style="background-color: #0b1e35;">

      <!-- despegable -->
        <div class="btn-group">
        <input type="image" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #f5f5f5;" src="https://image.flaticon.com/icons/png/512/56/56763.png" width="40px" height="30px"/>
        <div class="dropdown-menu" style="background-color: #ac9ece;">
          <a class="dropdown-item" style="background-color: #5880b1;"><font face="cambria">Generos</font></a>
          <font face="times new roman">
            <a class="dropdown-item" href="{{ url('/Literatura') }}">Literatura</a>
            <a class="dropdown-item" href="{{ url('/Juveniles') }}">Libros Juveniles</a>
            <a class="dropdown-item" href="{{ url('/Infantiles') }}">Libros Infantiles</a>
            <a class="dropdown-item" href="{{ url('/Ingles') }}">Libros en Ingl??s</a>
            <a class="dropdown-item" href="{{ url('/General') }}">Inter??s General</a>
            <a class="dropdown-item" href="{{ url('/Profesionales') }}">Profesionales y Especializados</a>
            <a class="dropdown-item" href="{{ url('/Textos') }}">Textos Escolares</a>
        </font>
        </div>
      </div>

      <!-- espacios -->
    <h1>&nbsp; &nbsp;</h1>

    <!-- logo -->
    <img class="navbar-brand" src="https://image.flaticon.com/icons/png/512/1047/1047277.png" width="40px" height="50px"></a>
        <a class="navbar-brand" href="{{ url('Home') }}"><h1 style="color:greenyellow">LibCompany!!</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>   

        <h1>&nbsp; &nbsp;   </h1>

        <a class="navbar-brand" href="{{ url('/Contactenos') }}"><h1 style="color:greenyellow"><font face="monaco" size="5">Contactenos</font></h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 

        <a class="navbar-brand" href="{{ url('/Quienes') }}"><h1 style="color:greenyellow"><font face="monaco" size="5">??Quienes somos?</font></h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 

        <a class="navbar-brand" href="{{ url('/Almacen') }}"><h1 style="color:rgb(125, 201, 224)"><font face="didot" size="5">Almacen</font></h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 

        <a href="{{ url('/Tienda') }}"><img class="navbar-brand" src="https://svgsilh.com/svg_v2/1371193.svg" width="60px" height="80px"></a>        

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">

        <!-- buscar -->
                <form action="{{ url('/Buscador') }}" > <!-- method="post"-->
                </li>
                <li class="nav-item ">
                <input type="text" name="Buscar" id="" placeholder="Buscar...">
                <input type="submit" name="" id="" value="Buscar">
                </li>
                </form>
                
            </ul>   
        </div>
    </nav>
  </div>
  </head>

    <!-- Inicio Fondo -->
    <center>
    <br><div class="ewk_cont_banner">
      <div class="ew_cont_banner">

  <!-- tabla -->
  <br>
  <table class="table">
    <thead class="thead-ligth">
      <tr>
        <th scope="col" style="background-color: #8ad8e2;"></th>
      </tr>
    </thead>
</table>
   
    <br>
    <p><h1 style="color:#60c96e">Almacen</h1></p>
    <br>

    <a class="btn btn-success" href=" {{ url('Crear') }} ">Crear</a>

    <!-- literatura-->
    <br><br>
    <h2><font face="monaco" size="6" color="#000000">Literatura</font></h2>
    <br>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Autor</th>
                <th scope="col">Precio</th>
                <th scope="col">Genero</th>
                <th scope="col">Imagen</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Almacen as $items)
            @if ($items->Genero=='Literatura')
            <tr>
                <th scope="row" style="background-color: #D6E0E5 ">{{ $items->id }}</th>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Nombre }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Autor }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Precio }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Genero }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">
                    <img src="{{ asset('storage').'/'.$items->Imagen }}" alt="" width="50">    
                </td>
                <td scope="row" style="background-color: #D6E0E5 "> 
                    <a class="btn btn-info" href="{{ url('Home/'.$items->id.'/edit') }}">Modificar</a>
                    <form action="{{ url('Home/'.$items->id) }}" method="GET">
                        @csrf
                        <button class="btn btn-danger">Eliminar</button>
                    </form>  
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <!-- Libros Juveniles-->
    <br><br>
    <h2><font face="monaco" size="6" color="#000000">Libros Juveniles</font></h2>
    <br>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Autor</th>
                <th scope="col">Precio</th>
                <th scope="col">Genero</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Almacen as $items)
            @if ($items->Genero=='Juveniles')
            <tr>
                <th scope="row" style="background-color: #D6E0E5 ">{{ $items->id }}</th>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Nombre }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Autor }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Precio }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Genero }}</td>
                <td scope="row" style="background-color: #D6E0E5 "> 
                    <a class="btn btn-info" href="{{ url('Home/'.$items->id.'/edit') }}">Modificar</a>
                    <form action="{{ url('Home/'.$items->id) }}" method="GET">
                        @csrf
                        <button class="btn btn-danger">Eliminar</button>
                    </form>   
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <!-- Libros Infantiles-->
    <br><br>
    <h2><font face="monaco" size="6" color="#000000">Libros Infantiles</font></h2>
    <br>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Autor</th>
                <th scope="col">Precio</th>
                <th scope="col">Genero</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Almacen as $items)
            @if ($items->Genero=='Infantiles')
            <tr>
                <th scope="row" style="background-color: #D6E0E5 ">{{ $items->id }}</th>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Nombre }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Autor }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Precio }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Genero }}</td>
                <td scope="row" style="background-color: #D6E0E5 "> 
                    <a class="btn btn-info" href="{{ url('Home/'.$items->id.'/edit') }}">Modificar</a>
                    <form action="{{ url('Home/'.$items->id) }}" method="GET">
                        @csrf
                        <button class="btn btn-danger">Eliminar</button>
                    </form>  
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <!-- Libros en Ingles-->
    <br><br>
    <h2><font face="monaco" size="6" color="#000000">Libros en Ingles</font></h2>
    <br>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Autor</th>
                <th scope="col">Precio</th>
                <th scope="col">Genero</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Almacen as $items)
            @if ($items->Genero=='Ingles')
            <tr>
                <th scope="row" style="background-color: #D6E0E5 ">{{ $items->id }}</th>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Nombre }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Autor }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Precio }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Genero }}</td>
                <td scope="row" style="background-color: #D6E0E5 "> 
                    <a class="btn btn-info" href="{{ url('Home/'.$items->id.'/edit') }}">Modificar</a>
                    <form action="{{ url('Home/'.$items->id) }}" method="GET">
                        @csrf
                        <button class="btn btn-danger">Eliminar</button>
                    </form>   
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <!-- Interes General-->
    <br><br>
    <h2><font face="monaco" size="6" color="#000000">Interes General</font></h2>
    <br>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Autor</th>
                <th scope="col">Precio</th>
                <th scope="col">Genero</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Almacen as $items)
            @if ($items->Genero=='General')
            <tr>
                <th scope="row" style="background-color: #D6E0E5 ">{{ $items->id }}</th>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Nombre }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Autor }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Precio }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Genero }}</td>
                <td scope="row" style="background-color: #D6E0E5 "> 
                    <a class="btn btn-info" href="{{ url('Home/'.$items->id.'/edit') }}">Modificar</a>
                    <form action="{{ url('Home/'.$items->id) }}" method="GET">
                        @csrf
                        <button class="btn btn-danger">Eliminar</button>
                    </form>   
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <!-- Profesionales y Especializados-->
    <br><br>
    <h2><font face="monaco" size="6" color="#000000">Profesionales y Especializados</font></h2>
    <br>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Autor</th>
                <th scope="col">Precio</th>
                <th scope="col">Genero</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Almacen as $items)
            @if ($items->Genero=='Profesional')
            <tr>
                <th scope="row" style="background-color: #D6E0E5 ">{{ $items->id }}</th>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Nombre }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Autor }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Precio }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Genero }}</td>
                <td scope="row" style="background-color: #D6E0E5 "> 
                    <a class="btn btn-info" href="{{ url('Home/'.$items->id.'/edit') }}">Modificar</a>
                    <form action="{{ url('Home/'.$items->id) }}" method="GET">
                        @csrf
                        <button class="btn btn-danger">Eliminar</button>
                    </form>  
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <!-- Textos Escolares-->
    <br><br>
    <h2><font face="monaco" size="6" color="#000000">Textos Escolares</font></h2>
    <br>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Autor</th>
                <th scope="col">Precio</th>
                <th scope="col">Genero</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Almacen as $items)
            @if ($items->Genero=='Textos')
            <tr>
                <th scope="row" style="background-color: #D6E0E5 ">{{ $items->id }}</th>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Nombre }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Autor }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Precio }}</td>
                <td scope="row" style="background-color: #D6E0E5 ">{{ $items->Genero }}</td>
                <td scope="row" style="background-color: #D6E0E5 "> 
                    <a class="btn btn-info" href="{{ url('Home/'.$items->id.'/edit') }}">Modificar</a>
                    <form action="{{ url('Home/'.$items->id) }}" method="GET">
                        @csrf
                        <button class="btn btn-danger">Eliminar</button>
                    </form>   
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

  </center>
  </div>
  <center>
    <div class="p-4">
      <ol class="list-unstyled">
      
      <table class="table table-borderless">
               <thead class="">
                   <tr>
                       <th><img  class="img1"  src="https://png.pngtree.com/element_our/md/20180518/md_5aff6081b74c8.png" title="Facebook" width="100" height="100"></th>
                       <th><img  class="img2"  src="https://i.pinimg.com/originals/79/7a/fe/797afe1351677d0ad8787224e6a5be2a.png" title="Instagram" width="100" height="100"></th>
                       <th><img  class="img3"  src="https://img.icons8.com/cotton/2x/twitter.png" title="Twitter" width="100" height="100"></th>
                   </tr>
               </thead>
               <tbody>
                  <tr>
                      <td><li><a href="https://www.facebook.com/"><H2>Facebook</H2></a></li></td>
                      <td><li><a href="https://www.instagram.com/"><H2>Instagram</H2></a></li></td>
                      <td><li><a href="https://twitter.com/explore"><H2>Twitter</H2></a></li></td>
                      </ol>
            </div>
                  </tr>
               </tbody>
  </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>