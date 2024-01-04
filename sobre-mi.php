<?php 
 $pg = "sobre-mi";


?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="sobre-mi" class="d-flex flex-column h-100">
  <header class="container">
       <?php include_once("menu.php");?>
  </header>
  <main>
    <section id="bio" class="container">
    <div class="row">
      <div class="col-12 col-sm-7">
        <h1 class="py-5">Sobre mí</h1>
        <p>Apasionado por la tecnología y gestión de proyectos. Soy docente de cursos de programación Full Stack y de Base de datos.</p>
        <a href="contactos.php" class="btn btn-rojo my-5 d-none d-sm-block w-25">Enviar mensaje</a>
      </div>
      <div class="col-10 col-sm-3 py-5 pe-5 d-none d-sm-block">
        <img src="images/juli.jpg" class="img-fluid" alt="julian">
      </div>
      <div class="col-12 d-sm-block text-center d-sm-none py-2">
        <img src="images/juli.jpg" class="img-fluid responsive" alt="julian">
      </div>
        <div class="col-12 text-center d-sm-block d-sm-none">
        <a href="contactos.html" class="btn btn-rojo my-3 d-sm-block d-sm-none">Enviar mensaje</a>
      </div>
    </div>
    
    </section>
    <section id="stack">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="py-5">Stack tecnológico</h2>
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">Javascript</h3>
              <i class="fa-brands fa-js pb-5"></i>
            </div> 
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">PHP</h3>
              <i class="fa-brands fa-php pb-5"></i>
            </div> 
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">HTML</h3>
              <i class="fa-brands fa-html5 pb-5"></i>
            </div> 
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">API Rest</h3>
              <i class="fa-solid fa-gears pb-5"></i>
            </div> 
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">laravel</h3>
              <i class="fa-brands fa-laravel pb-5"></i>
            </div> 
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">Bootstrap</h3>
              <i class="fa-brands fa-bootstrap pb-5"></i>
            </div> 
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">MySQL</h3>
              <i class="fa-solid fa-database pb-5"></i>
            </div> 
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">CSS</h3>
              <i class="fa-brands fa-css3-alt pb-5"></i>
            </div> 
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">Git</h3>
              <i class="fa-brands fa-git pb-5"></i>
            </div> 
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">React.js</h3>
              <i class="fa-brands fa-react pb-5"></i>
            </div> 
          </div>
          <div class="col-6 col-sm-2">
            <div class="tecnologia mb-4">
              <h3 class="pt-5 pb-1">Excel</h3>
              <i class="fa-solid fa-table pb-5"></i>
            </div> 
          </div>
        </div>
      </div>

    </section>
      <section class="container" id="experiencia">
         <div class="row">
          <div class="col-12">
            <h2 class="pt-5 pb-4">Experiencia Laboral</h2>  
          </div>
         </div>
         <div class="row shadow">
        <div class="col-sm-2 d-none d-sm-block p-5">
          <img src="images/prosegur.png" alt="prosegur" class="img-fluid">
        </div>
        <div class="col-10 my-2">
          <h3>Vigilancia-Recepcion</h3>
            <h4>PROSEGUR VIGILANCIA ACTIVA S.A</h4>
            <h5>2018 - presente</h5>
            <p>Actualmente conformo en el equipo de vigilancia en la fabrica Metalsa SA,desempeñando tareas de vigilancia y uso de control de datos y registros en recepcion.</p>
        </div>
        <div class="col-sm-2 d-none d-sm-block p-5">
          <img src="images/park.png" alt="park" class="img-fluid">
        </div>
        <div class="col-10 my-3">
          <h3>Operario-Produccion</h3>
          <h4>Parque de la costa</h4>
          <h5>2015 - 2017</h5>
          <p>Manejo y control de produccion en el sector de juegos,desempeño en atencion al cliente en diferentes sectores del predio. </p>
          </div>
          <div class="col-sm-2 d-none d-sm-block p-5">
            <img src="images/friday.png" alt="prosegur" class="img-fluid">
          </div>
          <div class="col-10 my-3">
            <h3>Produccion</h3>
          <h4>TGI Fridays</h4>
          <h5>2013 - 2015</h5>
          <p>Desenpeño en distintos sectores de produccion , preparacion y seguimiento de recetas en el area de la cocina.</p>
            </div>
            <div class="col-sm-2 d-none d-sm-block text-center p-5">
              <i class="fa-solid fa-briefcase"></i>
            </div>
            <div class="col-10 my-3">
              <h3>Operario-Edicion</h3>
              <h4>Abiara Pack</h4>
              <h5>2009 - 2012</h5>
              <p>Produccion y operaciones en el sector , desempeño en armado de cajas , y asistente para edicion de imagenes en el sector grafico.</p>
              </div>
        </div>
      </section>
      <section class="container mb-5" id="formacion">
        <div class="row">
        <div class="col-12 pt-5 pb-4">
          <h2>Formacion Academica</h2>
        </div>
        </div>
        <div class="row shadow">
          <div class="col-12 col-sm-6">
            <div class="row">
            <div class="col-sm-2 py-3 d-none my-auto d-sm-block">
              <img src="images/depc.png" class="img-fluid" alt="DePc">
            </div>
            <div class="col-12 col-sm-10 p-3">
              <h3>Desarrollador Web Full stack</h3>
              <h4>DEPCSUITE SA</h4>
              <h5>2023 - Presente</h5>
              <p>https://depcsuite.com/</p>
            </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
            <div class="col-sm-2 d-none py-3 my-auto d-sm-block">
              <img src="images/rosario.png" class="img-fluid" alt="UNIVERSIDAD">
            </div>
            <div class="col-12 col-sm-10 p-3">
              <h3>Desarrollador Web Front-End</h3>
          <h4>UNIVERSIDAD DE ROSARIO</h4>
          <h5>2021 - 2022</h5>
          <p>https://unr.edu.ar/</p>
            </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
            <div class="col-sm-2 d-none py-3 my-auto d-sm-block">
              <img src="images/argprog.png" class="img-fluid" alt="argpro">
            </div>
            <div class="col-12 col-sm-10 p-3">
              <h3>Introduccion a la Programacion</h3>
          <h4>ARGENTINA PROGRAMA 4.0</h4>
          <h5>junio 2020-2021</h5>
          <p>https://www.argentina.gob.ar/</p>
            </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
            <div class="col-sm-2 d-none py-3 my-auto d-sm-block text-center p-3">
              <i class="fa-solid fa-building-columns"></i>
            </div>
            <div class="col-12 col-sm-6 p-3">
              <h3>Diseño Grafico</h3>
          <h4>Instituto Argentino de Computacion</h4>
          <h5>2013-2015</h5>
          <p>https://www.argentina.gob.ar/</p>
            </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
            <div class="col-sm-2 d-none py-3 my-auto d-sm-block text-center p-3">
              <i class="fa-solid fa-building-columns"></i>
            </div>
            <div class="col-12 col-sm-6 p-3">
              <h3>Informatica</h3>
          <h4>Instituto Argentino de Computacion</h4>
          <h5>2012-2013</h5>
          <p>https://www.argentina.gob.ar/</p>
            </div>
            </div>
          </div>
        </div>
      </section>
      <section id="otros">
        <div class="container">
        <div class="row py-5 mx-0">
          <div class="col-12 col-sm-6 pb-4 pb-sm-0">
            <div class="row ml-sm-2 bg-white card-otros shadow ms-sm-1">
              <div class="col-4 text-center card">
                <i class="fa-solid fa-globe"></i>
              </div>
              <div class="col-8 p-4 pb-3">
                <h2>IDIOMAS</h2>
                <ul>
                  <li>Español - Nativo</li>
                  <li>Ingles - Intermediate B1</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row ml-sm-2 bg-white card-otros shadow ms-sm-1">
              <div class="col-4 text-center card">
                <i class="fa-solid fa-table-tennis-paddle-ball"></i>
              </div>
              <div class="col-8 p-5 pb-3">
                <h2>HOBBIES</h2>
                <ul>
                  <li>Futbol</li>
                  <li>Piano - Teclado</li>
                  <li>Bicicleta</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
  </main>
  <footer class="container mt-auto py-4">
      <div class="row">
         <div class="col-12 col-sm-3">
          <a href="https://github.com/" target="_blank">
              <i class="fa-brands fa-github"></i></a>
          <a href="https://ar.linkedin.com/" target="_blank">
              <i class="fa-brands fa-linkedin-in"></i></a>
         </div>
         <div class="col-12 col-sm-3">
          Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2 " class="link-rojo">DePc Suite</a>
         </div>
         <div class="col-12 col-sm-3">
          <a href="mailto:torres_226@hotmail.com" class="link-rojo">torres_226@hotmail.com</a>
         </div>
         </div>
         <a href="https://api.whatsapp.com/send?phone=+541126161384">
          <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i>
         </a>
  </footer>
</body>
</html>