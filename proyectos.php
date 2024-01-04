<?php 
 $pg = "proyectos";


?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="proyectos" class="d-flex flex-column h-100">
  <header class="container">
     <?php include_once("menu.php");?>
  </header>
  <main class="container">
      <div class="row">
        <div class="col-12 py-5">
          <h1>Proyectos</h1>
      </div>  
      </div>
      <div class="row">
        <div class="col-12 pb-3">
          <p>Los siguientes son algunos de los trabajos que he realizado:</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-4 mb-3">
          <div class="proyecto">
          <img src="images/abmclientes.png" alt="" class="img-fluid">
          <h2 px-3 py-2>AMB Clientes</h2>
          <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS,
            PHP, Bootstrap y Json.</p>
            <div class="row py-4 pb-3 px-3">
              <div class="col-6">
                <a href="#" class="btn btn-rojo">Ver online</a>
              </div>
              <div class="col-6 text-center">
                <a href="#" class="link-rojo">Codigo Fuente</a>
              </div>
            </div>
        </div>
        </div>
        <div class="col-12 col-sm-4 mb-3">
          <div class="proyecto">
          <img src="images/abmventas.png" alt="" class="img-fluid">
          <h2 px-3 py-2>SISTEMA DE GESTION DE VENTAS</h2>
          <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
            <div class="row py-4 pb-3 px-3">
              <div class="col-6">
                <a href="#" class="btn btn-rojo">Ver online</a>
              </div>
              <div class="col-6 text-center">
                <a href="#" class="link-rojo">Codigo Fuente</a>
              </div>
            </div>
        </div>
        </div>
        <div class="col-12 col-sm-4 mb-3">
          <div class="proyecto">
          <img src="images/proyecto-integrador.png" alt="" class="img-fluid">
          <h2 px-3 py-2>SISTEMA DE GESTION DE VENTAS</h2>
          <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
            <div class="row py-4 pb-3 px-3">
              <div class="col-6">
                <a href="#" class="btn btn-rojo">Ver online</a>
              </div>
              <div class="col-6 text-center">
                <a href="#" class="link-rojo">Codigo Fuente</a>
              </div>
            </div>
        </div>
        </div>
        
      </div>
  </main>
  <footer class="container mt-auto py-4">
      <div class="row">
         <div class="col-sm-3 col-12">
          <a href="https://github.com/" target="_blank">
              <i class="fa-brands fa-github"></i></a>
          <a href="https://ar.linkedin.com/" target="_blank">
              <i class="fa-brands fa-linkedin-in"></i></a>
         </div>
         <div class="col-sm-3 col-12">
          Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2 " class="link-rojo">DePc Suite</a>
         </div>
         <div class="col-sm-3 col-12">
          <a href="mailto:torres_226@hotmail.com" class="link-rojo">torres_226@hotmail.com</a>
         </div>
         </div>
         <a href="https://api.whatsapp.com/send?phone=+541126161384">
          <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i>
         </a>
  </footer>
</body>
</html>