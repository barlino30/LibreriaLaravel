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

    <title>LibCompany!!</title>
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

    <!-- carrusel de imagenes -->
    <center>
    <br><div class="ewk_cont_banner">
      <div class="ew_cont_banner">

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
      </nav>
      </div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      
  
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          <li data-target="myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="myCarousel" data-slide-to="1"></li>
          <li data-target="myCarousel" data-slide-to="2"></li>
          <li data-target="myCarousel" data-slide-to="3"></li>
          <li data-target="myCarousel" data-slide-to="4"></li>
      </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <center>
        <img class="imagen1" src="https://images-na.ssl-images-amazon.com/images/I/71YoFJSz3LL.jpg" class="d-block w-100"  width="300px" height="300px">
        </center>
      </div>
      <div class="carousel-item">
        <center>
        <img class="imagen2" src="https://www.librosdemario.com/covers/86/67/cover.jpg" class="d-block w-100" width="300px" height="300px">
        </center>
      </div>
      <div class="carousel-item">
        <center>
      <img class="imagen3" src="https://mortalyrosasite.files.wordpress.com/2018/05/img104.jpg?w=982" class="d-block w-100" width="300px" height="300px">
    </center>
    </div>
      <div  class="carousel-item">
        <center>
        <img class="imagen4" src="https://www.elejandria.com/covers/Orgullo_y_prejuicio-Jane_Austen-lg.png" class="d-block w-100" width="300px" height="300px">
      </center>
      </div>
        <div class="carousel-item">
          <center>
        <img  class="imagen5" src="https://m.media-amazon.com/images/I/518QGVW98WL.jpg" class="d-block w-100" width="300px" height="300px">
      </center>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>

      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </div>
</div>

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
    <p><h1 style="color:#60c96e">Novedades</h1></p>

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
                <img src="https://images.cdn3.buscalibre.com/fit-in/360x360/0f/b5/0fb582c596c8701fe79db731e07e7524.jpg" class="card-img-top" width="300" height="350">
                <div class="card-body">
                  <p class="card-text">Lolita</p>
                </div>
              </div>
            </th>
              
          <th scope="col">
          <div class="card" style="width: 18rem; background-color: #bd69af; ">
            <img src="https://m.media-amazon.com/images/I/41FmpKjlILL.jpg" class="card-img-top" width="300" height="350">
            <div class="card-body">
              <p class="card-text">Ulises</p>
            </div>
          </div>
        </th>


      <th scope="col">
        <div class="card" style="width: 18rem; background-color: #bd69af; ">
        <img src="https://kbimages1-a.akamaihd.net/629bdebc-b00f-40b1-be67-2213ba347472/1200/1200/False/madame-bovary-espanol.jpg" class="card-img-top" width="300" height="350">
        <div class="card-body">
          <p class="card-text">Madame Bovary</p>
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
                  <img src="https://imgv2-2-f.scribdassets.com/img/word_document/314839436/original/216x287/5724a0dae5/1551773632?v=1" class="card-img-top" width="300" height="350">
                  <div class="card-body">
                    <p class="card-text">En busca del tiempo perdido</p>
                  </div>
                </div>
              </th>
  
            <th scope="col">
            <div class="card" style="width: 18rem; background-color: #bd69af; ">
            <img src="https://www.65ymas.com/uploads/s1/19/69/04/9788466236645.jpeg" class="card-img-top" width="300" height="350">
            <div class="card-body">
              <p class="card-text">Don Quijote de la Mancha</p>
            </div>
          </div>
        </th>
  
        <th scope="col">
          <div class="card" style="width: 18rem; background-color: #bd69af; ">
          <img src="https://images.cdn2.buscalibre.com/fit-in/360x360/15/82/1582325e2be6affa4a6bdcab50969966.jpg" class="card-img-top" width="300" height="350">
          <div class="card-body">
            <p class="card-text">El retrato de Dorian Gray</p>
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
                <img src="https://pics.filmaffinity.com/Anna_Karenina-703563549-large.jpg" class="card-img-top"  width="300" height="350">
                <div class="card-body">
                  <h5 class="card-title">Anna Karenina</h5>
                  <p class="card-text">Lev Tolstói</p>
                  <a href="{{ url('/VistaP') }}" class="btn btn-primary">Obtenlo</a>
                </div>
              </div>
          </th>
  
          <th scope="col">
            <div class="card" style="width: 18rem; background-color: #bd69af;">
              <img src="https://www.planetadelibros.com.co/usuaris/libros/fotos/211/m_libros/portada_el-principito-edicion-de-lujo_antoine-de-saint-exupery_201512072218.jpg" class="card-img-top"  width="300" height="350">
              <div class="card-body">
                <h5 class="card-title">El principito(Edición de lujo)</h5>
                <p class="card-text">Antoine de Saint-Exupéry</p>
                <a href="{{ url('/VistaP') }}" class="btn btn-primary">Obtenlo</a>
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
          <img src="https://images-na.ssl-images-amazon.com/images/I/81v-AhEBWZL.jpg" class="card-img-top"  width="300" height="350">
          <div class="card-body">
            <h5 class="card-title">El proceso</h5>
            <p class="card-text">Franz Kafka</p>
            <a href="{{ url('/VistaP') }}" class="btn btn-primary">Obtenlo</a>
          </div>
        </div>
    </th>

    <th scope="col">
      <div class="card" style="width: 18rem; background-color: #bd69af;">
        <img src="https://www.elejandria.com/covers/Hamlet-Shakespeare_William-lg.png" class="card-img-top"  width="300" height="350">
        <div class="card-body">
          <h5 class="card-title">El ruido y la furia</h5>
          <p class="card-text">William Faulkner</p>
          <a href="{{ url('/VistaP') }}" class="btn btn-primary">Obtenlo</a>
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
      <img src="https://unlibroparaestanoche.files.wordpress.com/2015/03/gone_with_wind.jpg" class="card-img-top"  width="300" height="350">
      <div class="card-body">
        <h5 class="card-title">Hamlet</h5>
        <p class="card-text">William Shakespeare</p>
        <a href="{{ url('/VistaP') }}" class="btn btn-primary">Obtenlo</a>
      </div>
    </div>
</th>

<th scope="col">
  <div class="card" style="width: 18rem; background-color: #bd69af;">
    <img src="https://pictures.abebooks.com/ALZOFORAESOTERICA/30315661917.jpg" class="card-img-top"  width="300" height="350">
    <div class="card-body">
      <h5 class="card-title">Lo que el viento se llevó</h5>
      <p class="card-text">Margaret Mitchell</p>
      <a href="{{ url('/VistaP') }}" class="btn btn-primary">Obtenlo</a>
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