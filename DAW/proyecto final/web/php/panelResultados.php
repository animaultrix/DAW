<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="practicas,html,curso">
    <meta name="description" content="pagina de">
    <title>Página Panel de resultados</title>
    <!--autor plantilla-->
    <meta name="Antonio Esteban Pestana Guerra">
    <link rel="icon" type="image/png" href="../img/luxurygclogomini.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- main-css -->
    <link rel="stylesheet" href="../css/main-css.css">
  </head>
  <body> 
    <nav class="navbar navbar-light navbar-expand-lg bg-light fixed-top py-4 px-4">
      <div class="container-fluid">
        <div class="col-2">
          <a class="px-5 navbar-brand text-center" href="../index.php#" title="Home"><img src="../img/luxurygclogo.png"
            width="133" height="133" alt="logo"></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- etiquetas select del encabezado -->
        <div class=" collapse navbar-collapse  col-10" id="navbarNav">
          <form action ="../php/panelResultados.php" method="POST">
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
<div class="text-center text-light  h1 titulo-css ">
  <p>
    Luxury gc
  </p>
</div>
<!-- parte del código php -->
<?php
/*Se filtran varias posibilidades donde falte 'precios' o 'precios y habitaciones'
ya que el código SQL resultante sería distinto por los AND*/
try{
//no se ejecutara si no hay opciones marcadas
  if (!$_REQUEST['precios']=="0" || !$_REQUEST['habitaciones']=="0" || !$_REQUEST['anos']=="0"){
    include('conexion.php');
    $pre = "";
    $hab = "";
    $anho = "";
    //no se ejecutara este if si no hay opccion elejida en precio y habitaciones
    if ($_POST['precios']==0 && $_POST['habitaciones']==0){
      switch ($_POST['anos']) {
        
        case 1:
            $anho = " fechaconstruccion BETWEEN '1980-01-01 00:00:00' AND '1989-12-31 23:59:59'";
            break;
        case 2:
            $anho = " fechaconstruccion BETWEEN '1990-01-01 00:00:00' AND '1999-12-31 23:59:59'";
            break;
        case 3:
            $anho = " fechaconstruccion BETWEEN '2000-01-01 00:00:00' AND '2010-12-31 23:59:59'";
            break;
        case 4:
            $anho = " fechaconstruccion > '0000-01-01 00:00:00'";
            break;
      }//no se ejecutara este else if si no hay nada elejido en precios
    }else if ($_POST['precios']==0){
      switch ($_POST['habitaciones']) {
        
        case 1:
            $hab = " habitaciones = 1";
            break;
        case 2:
            $hab = " habitaciones = 2";
            break;
        case 3:
            $hab = " habitaciones = 3";
            break;
        case 4:
            $hab = " habitaciones > 0";
            break;
      }
      switch ($_POST['anos']) {
        
        case 1:
            $anho = " AND fechaconstruccion BETWEEN '1980-01-01 00:00:00' AND '1989-12-31 23:59:59'";
            break;
        case 2:
            $anho = " AND fechaconstruccion BETWEEN '1990-01-01 00:00:00' AND '1999-12-31 23:59:59'";
            break;
        case 3:
            $anho = " AND fechaconstruccion BETWEEN '2000-01-01 00:00:00' AND '2010-12-31 23:59:59'";
            break;
        case 4:
            $anho = " AND fechaconstruccion > '0000-01-01 00:00:00'";
            break;
      }// si precio tiene algo elegido se ejecutara solo esta parte del código
    }else{
      switch ($_POST['precios']) {
        
        case 1:
            $pre = "precio <= 100000";
            break;
        case 2:
            $pre = "precio <= 200000";
            break;
        case 3:
            $pre = "precio <= 300000";
            break;
        case 4:
            $pre = "precio > 0";
            break;
      }
      switch ($_POST['habitaciones']) {
        
        case 1:
            $hab = " AND habitaciones = 1";
            break;
        case 2:
            $hab = " AND habitaciones = 2";
            break;
        case 3:
            $hab = " AND habitaciones = 3";
            break;
        case 4:
            $hab = " AND habitaciones > 0";
            break;
      }
      switch ($_POST['anos']) {
        
        case 1:
            $anho = " AND fechaconstruccion BETWEEN '1980-01-01 00:00:00' AND '1989-12-31 23:59:59'";
            break;
        case 2:
            $anho = " AND fechaconstruccion BETWEEN '1990-01-01 00:00:00' AND '1999-12-31 23:59:59'";
            break;
        case 3:
            $anho = " AND fechaconstruccion BETWEEN '2000-01-01 00:00:00' AND '2010-12-31 23:59:59'";
            break;
        case 4:
            $anho = " AND fechaconstruccion > '0000-01-01 00:00:00'";
            break;
      }
    }
    $sql = "select * from hogar where ".$pre.$hab.$anho;
    $resultado = mysqli_query($conexion, $sql);//echo $sql;
    while($row=mysqli_fetch_assoc($resultado)){
        $image = $row["imagen"];
        $precio = $row["precio"];
        $metros = $row["metros"];
        $amueblado = $row["amueblado"];
        $fechaconstruccion = $row["fechaconstruccion"];
        $habitaciones = $row["habitaciones"];
        echo<<<HEREDOC
        '<main class="container ">
        <div class="bg-light p-5 rounded  enlace pt-5 mt-5">
            <div class="container text-center">
                <div class="row">
                    <div class="col align-self-start">'
                            <img src="{$image}"/>
                    </div>
                    <div class="col align-self-start text-sm-start">
                        <p class="my-5 h4">precio: {$precio}€</p>
                        <p class="my-5 h4">habitaciones: {$habitaciones}</p>
                        <p class="my-5 h4">metros cuadrados: {$metros}</p>
                    </div>
                    <div class="col align-self-start text-sm-start">
                        <p class="my-5 h4">fecha construcción: {$fechaconstruccion}</p>
                        <p class="my-5 h4">amueblada: {$amueblado}</p>
                    </div>
                </div>
            </div>
        </div>
        </main>
HEREDOC;
    }
  }
}catch (Exception $e) {
      echo "ERROR ".$e;
}
?>

    <!-- footer -->

    <footer class="bg-white">
<div class="container">
        <div class="row my-5">
          <div class="col-md-6" >
            <h2 >
              Lorem ipsum dolor sit amet.
            </h2>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
               Aperiam maiores tempore quidem, minima eius ipsam consequuntur
               non cumque dolor ab maxime incidunt itaque consectetur mollitia
               praesentium quos, placeat molestias repellat!
            </p>
          </div>
          <div class="col-md-6">
            <h2 >
              Lorem ipsum dolor sit amet.
            </h2>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Aperiam maiores tempore quidem, minima eius ipsam consequuntur
              non cumque dolor ab maxime incidunt itaque consectetur mollitia
              praesentium quos, placeat molestias repellat!
            </p>
          </div>
        </div>

      </div>
</footer>
 <!-- Bootstrap Script -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 <!-- Scripts unpkg -->
 <script src="https://unpkg.com/scrollreveal"></script>
 <!-- JavaScript -->
 <script src="../js/javaScript2.js"></script>
 <div id="ultimo"></div>
</body>
</html>
