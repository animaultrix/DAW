<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="practicas,html,curso">
    <meta name="description" content="pagina de">
    <link rel="icon" type="image/png" href="img/luxurygclogomini.png">
    <title>Página Principal</title>
    <!--autor plantilla-->
    <meta name="Antonio Esteban Pestana Guerra"> 
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- main-css -->
    <link rel="stylesheet" href="css/main-css.css">
    <title>Practicas</title>
    <!-- scripts página -->
    <script src="practica-javascript1/Ejercicio-2/Ejercicio-2.js"></script>
    <script src="practica-javascript1/Ejercicio-3/Ejercicio-3.js"></script>
    <script src="practica-javascript1/Ejercicio-4/Ejercicio-4.js"></script>
    <script src="practica-javascript1/Ejercicio-6/Ejercicio-6.js"></script>
  </head>
  <body> 
    <nav class="navbar navbar-light navbar-expand-lg bg-light fixed-top py-4 px-4">    
      <div class="container-fluid">
        <div class="col-2">
          <a class="px-5 navbar-brand text-center" href="index.php#" title="Home"><img src="img/luxurygclogo.png"  width="133" height="133" alt="logo"></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class=" collapse navbar-collapse titulo-nav col-10" id="navbarNav">
          <form action ="php/panelResultados.php" method="POST">
              <ul class="navbar-nav col justify-content-start mt-1">
                <li class="nav-item mx-3">
                      <div class="dropdown-center">
                      <select name=precios class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected value="0">Precio máximo</option>
                      <option value="1">100.000€</option>
                      <option value="2">200.000€</option>
                      <option value="3">300.000€</option>
                      <option value="4">Todo</option>
                      </select>
                      </div>
                </li>
                <li class="nav-item mx-3">
                      <select name=habitaciones class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected value="0">Número de habitaciones</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">Todo</option>
                      </select>
                </li>
                <li class="nav-item mx-3">
                      <select name=anos class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected value="0">Año vivienda</option>
                      <option value="1">1980 a 1990</option>
                      <option value="2">1990 a 2000</option>
                      <option value="3">2000 a 2010</option>
                      <option value="4">Todo</option>
                      </select>
                </li>
                <li>
                      <button type="submit" value="Enviar" class="btn btn-dark mx-3">Buscar</button>
                </li>           
              </ul>
          </form>
        </div>
       
      </div>      
    </nav> 
<div class="text-center text-light  h1 titulo-css enlace">
  <p>
    Luxury gc
  </p>
</div>
    <!-- HEADER -->
    <header id="header" style="margin-top: 150px;">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="9000">
            <img src="https://api.lorem.space/image/house?w=600&h=325" class="d-block w-75  rounded mx-auto" alt="imagen.1">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://api.lorem.space/image/house?w=559&h=325" class="d-block w-75 rounded mx-auto" alt="imagen.2">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://api.lorem.space/image/house?w=601&h=325" class="d-block w-75 rounded mx-auto" alt="imagen.3">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>  
    </header>

<!-- SECCIÓN 1 -->
<SEction id="seccion1">
      <div class="container mt-5">
        <div class="row ">
          <div class="col-md-6">
            <img  src="https://picsum.photos/300/300" alt="imagen.1" style="width: 100%;">
          </div>
          <div class="col-md-6">
            <h1 class="display-4">Lorem ipsum dolor</h1>
            <p class="mt-5" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid nam qui nulla exercitationem dolorum, iusto accusantium harum eius aliquam nisi atque cumque nostrum eos ab fugiat nihil obcaecati vel explicabo.</p>
            <a class="btn btn-dark btn-lg mt-2">Leer más</a>
          </div>

        </div>
      </div>
    </SEction>
    <!-- footer -->

<footer class="bg-white">
<div class="container">
        <div class="row my-5">
          <div class="col-md-6" >
            <h2 >
              Lorem ipsum dolor sit amet.
            </h2>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam maiores tempore quidem, minima eius ipsam consequuntur non cumque dolor ab maxime incidunt itaque consectetur mollitia praesentium quos, placeat molestias repellat!
            </p>
          </div>
          <div class="col-md-6">
            <h2 >
              Lorem ipsum dolor sit amet.
            </h2>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam maiores tempore quidem, minima eius ipsam consequuntur non cumque dolor ab maxime incidunt itaque consectetur mollitia praesentium quos, placeat molestias repellat!
            </p>
          </div>
        </div>

      </div>
</footer>
 <!-- Bootstrap Script -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 <!-- Scripts unpkg -->
 <script src="https://unpkg.com/scrollreveal"></script>
 <!-- JavaScript -->
 <script src="js/javaScript.js"></script>  
 <div id="ultimo"></div>
</body>
</html>
