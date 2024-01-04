<?php 
 $pg = "contactos";


?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <Link rel="shorcut icon" href="images/favicon-32x32.png">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php");?>
    </header>
    <main class="container">
        <div class="row">
          <div class="col-12 py-5">
            <h1>Contacto</h1>
        </div>  
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
               <p>Te invito a que te contactes enviandome un mensaje o bien por whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
               <form action="" method="POST">
                <div class="pb-3">
                    <input type="text" id="txtNombre" placeholder="Nombre" class="form-control">
                </div>
                <div class="pb-3">
                    <input type="email" id="txtCorreo" placeholder="Correo" class="form-control">
                </div>
                <div class="pb-3">
                    <input type="tel" id="txtTelefono" placeholder="Telefono/whatsapp" class="form-control">
                </div>
                <div class="pb-3">
                    <textarea name="txtMensaje" id="txtMensaje" placeholder="Escriba su mensaje" class="form-control"></textarea>
                </div>
                <div class="pb-3">
                    <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn px-3">ENVIAR</button>
                </div>
               </form>
            </div>
        </div>

    </main>
    
    <footer class="container mt-auto py-4">
        <div class="row">
           <div class="col-12 pt-3 col-sm-3">
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