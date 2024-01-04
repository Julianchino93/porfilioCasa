<?php 
 $pg = "inicio";

?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php");?>
    </header>
    <main class="container">
        <div class="row">
          <div class="col-12 mt-4 text-center div-cohete">
            <a href="proyectos.html"><img src="images/cohete.svg" alt="cohete"></a>
          </div>
        </div>
        <div class="row">
          <div class=" col-sm-6 my-4 mt-5 text-center mb-3 offset-sm-3">
            <p class="py-1">Bienvenid@ a mi sitio web donde encontraras mis habilidades.</p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-12">
            <a href="proyectos.php" class="btn">Conoce mis proyectos</a>
          </div>
        </div>
    </main>
    <footer class="container mt-auto py-4">
      <div class="row">
         <div class="col-12 col-sm-3 pt-3">
          <a href="https://github.com/" target="_blank">
              <i class="fa-brands fa-github"></i></a>
          <a href="https://ar.linkedin.com/" target="_blank">
              <i class="fa-brands fa-linkedin-in"></i></a>
         </div>
         <div class="col-12 col-sm-3 pt-3 link-blanco">
          Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2">DePc Suite</a>
         </div>
         <div class="col-12 col-sm-3 pt-3 link-blanco">
          <a href="mailto:torres_226@hotmail.com">torres_226@hotmail.com</a>
         </div>
         <a href="https://api.whatsapp.com/send?phone=+541126161384">
          <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i>
         </a>
      </div>
  </footer>
</body>
</html>
</body>
</html>