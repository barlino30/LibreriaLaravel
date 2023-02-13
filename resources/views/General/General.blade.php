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

    <title>General</title>
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
            <a class="dropdown-item" href="{{ url('/Ingles') }}">Libros en Inglés</a>
            <a class="dropdown-item" href="{{ url('/General') }}">Interés General</a>
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

        <a class="navbar-brand" href="{{ url('/Quienes') }}"><h1 style="color:greenyellow"><font face="monaco" size="5">¿Quienes somos?</font></h1></a>
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
    <p><h1 style="color:#60c96e">Interes General</h1></p>

    <!-- primera subdivision -->
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
      </nav>
      </div>
      <div id="myCarousel1" class="carousel slide" data-ride="carousel">
      
  <!-- segundo carrucel -->
      <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <br><br>
          <li data-target="#myCarousel1" style="background-color: #96f8ca;" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel1" style="background-color: #96f8ca;" data-slide-to="1"></li>
      </ol>

<!-- items -->
      
    <div class="carousel-inner">
      <div class="carousel-item active">
        <center>
          <table class="table table-borderless">
          <thead>
            <tr>

              <th scope="col">
                <div class="card" style="width: 18rem; background-color: #bd69af; ">
                <img src="https://www.tornamesa.co/imagenes/9789585/978958556412.GIF" class="card-img-top" width="300" height="350">
                <div class="card-body">
                  <p class="card-text">La vida es una danza</p>
                </div>
              </div>
            </th>
              
          <th scope="col">
          <div class="card" style="width: 18rem; background-color: #bd69af; ">
            <img src="https://m.media-amazon.com/images/I/31LEz8KRv7L.jpg" class="card-img-top" width="300" height="350">
            <div class="card-body">
              <p class="card-text">Contagio: La evolución de las pandemias</p>
            </div>
          </div>
        </th>


      <th scope="col">
        <div class="card" style="width: 18rem; background-color: #bd69af; ">
        <img src="https://urano.blob.core.windows.net/share/i_portadas/250000047/250000047b.jpg" class="card-img-top" width="300" height="350">
        <div class="card-body">
          <p class="card-text">Tesla, Inventor de la Modernidad</p>
        </div>
      </div>
    </th>

      </tr>
    </thead>
  </table>

        </center>
      </div>

      <div class="carousel-item">
        <center>         
          <table class="table table-borderless">
            <thead>
              <tr>

                <th scope="col">
                  <div class="card" style="width: 18rem; background-color: #bd69af; ">
                  <img src="https://www.libreriadeportiva.com/imagenes/9788496/978849611172.JPG" class="card-img-top" width="300" height="350">
                  <div class="card-body">
                    <p class="card-text">Cómo optimizar el entrenamiento de fuerza</p>
                  </div>
                </div>
              </th>
  
            <th scope="col">
            <div class="card" style="width: 18rem; background-color: #bd69af; ">
            <img src="https://static.megustaleer.com.ar/images/libros_200_x/9789585477315.jpg" class="card-img-top" width="300" height="350">
            <div class="card-body">
              <p class="card-text">El cerebro invisible</p>
            </div>
          </div>
        </th>
  
        <th scope="col">
          <div class="card" style="width: 18rem; background-color: #bd69af; ">
          <img src="https://libreriadelau.vteximg.com.br/arquivos/ids/12078696-1000-1000/preguntas-que-valen-oro-9781607382614-rhmc.jpg?v=636966634936700000" class="card-img-top" width="300" height="350">
          <div class="card-body">
            <p class="card-text">Preguntas que valen oro</p>
          </div>
        </div>
      </th>
  
        </tr>
      </thead>
    </table>
        </center>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>

      <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </div>

  <!-- segunda subdivision -->
  <br>
  <div class="ew_cont_banner">

    <!-- tabla1-->
  <table class="table table-borderless">
            <thead>
              <tr>
                
            <th scope="col">
              <div class="card" style="width: 18rem; background-color: #bd69af;">
                <img src="https://images-na.ssl-images-amazon.com/images/I/51O0arScJoL._SX331_BO1,204,203,200_.jpg" class="card-img-top"  width="300" height="350">
                <div class="card-body">
                  <h5 class="card-title">Disciplina con amor</h5>
                  <p class="card-text">Rosa Barocio</p>
                  <a href="#" class="btn btn-primary">Obtenlo</a>
                </div>
              </div>
          </th>
  
          <th scope="col">
            <div class="card" style="width: 18rem; background-color: #bd69af;">
              <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSd1clYCseKfYxBr8jOD6wZJNGrb2YgqLVNKgftZYLgVyaLqsIj" class="card-img-top"  width="300" height="350">
              <div class="card-body">
                <h5 class="card-title">Nombres: origen y significado</h5>
                <p class="card-text">Maria Isabel Gonzalez</p>
                <a href="#" class="btn btn-primary">Obtenlo</a>
              </div>
            </div>
        </th>
  
        </tr>
      </thead>
    </table>
    <br>

    <!-- tabla2 -->

    <table class="table table-borderless">
      <thead>
        <tr>
          
      <th scope="col">
        <div class="card" style="width: 18rem; background-color: #bd69af;">
          <img src="https://static.megustaleer.com.ar/images/libros_650_x/EH406767.jpg" class="card-img-top"  width="300" height="350">
          <div class="card-body">
            <h5 class="card-title">Las cosas del querer</h5>
            <p class="card-text">Flavita Banana</p>
            <a href="#" class="btn btn-primary">Obtenlo</a>
          </div>
        </div>
    </th>

    <th scope="col">
      <div class="card" style="width: 18rem; background-color: #bd69af;">
        <img src="https://m.media-amazon.com/images/I/413f0AWT8sL.jpg" class="card-img-top"  width="300" height="350">
        <div class="card-body">
          <h5 class="card-title">¿Por qué pido y no recibo?</h5>
          <p class="card-text">Ana Mercedes Rueda</p>
          <a href="#" class="btn btn-primary">Obtenlo</a>
        </div>
      </div>
  </th>

  </tr>
</thead>
</table>

<!-- tabla3 -->

<table class="table table-borderless">
  <thead>
    <tr>
      
  <th scope="col">
    <div class="card" style="width: 18rem; background-color: #bd69af;">
      <img src="https://www.planetadelibros.com.mx/usuaris/libros/fotos/155/m_libros/portada_el-primer-ano-del-bebe_heidi-murkoff_201411190215.jpg" class="card-img-top"  width="300" height="350">
      <div class="card-body">
        <h5 class="card-title">El primer año del bebé</h5>
        <p class="card-text">Heidi E. Murkoff</p>
        <a href="#" class="btn btn-primary">Obtenlo</a>
      </div>
    </div>
</th>

<th scope="col">
  <div class="card" style="width: 18rem; background-color: #bd69af;">
    <img src="https://images-na.ssl-images-amazon.com/images/I/91m3AiX-wCL.jpg" class="card-img-top"  width="300" height="350">
    <div class="card-body">
      <h5 class="card-title">Alimenta tu cerebro</h5>
      <p class="card-text">David Perlmutter</p>
      <a href="#" class="btn btn-primary">Obtenlo</a>
    </div>
  </div>
</th>

</tr>
</thead>
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