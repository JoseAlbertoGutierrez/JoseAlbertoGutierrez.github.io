<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://kit.fontawesome.com/286f6b3460.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
  <?php
    session_start();
    $counter_name = "visitors.txt";
    
    // Read the current value of our counter file
    $f = fopen($counter_name,"r");
    $counterVal = fread($f, filesize($counter_name));
    fclose($f);
    
    // Has visitor been counted in this session?
    // If not, increase counter value by one
    if(!isset($_SESSION['hasVisited'])){
        $_SESSION['hasVisited']="yes";
        $counterVal++;
        $f = fopen($counter_name, "w");
        fwrite($f, $counterVal);
        fclose($f); 
    }
  ?>
    <!--Barra principal-->
    <div class="container-fluid bg-dark p-3">
        <div class="row align-items-center justify-content-evenly">
            <div class="col-3 text-center">
                <img src="img/profile.png" style="width: 200px; height: auto;" class="mw-100 img-thumbnail" alt="imagen del perfil">
            </div>
            <div class="col-6 text-center">
                <h1 class="text-light mt-4">Dr. José Alberto Gutiérrez Robles</h1>
                <p class="text-secondary fs-3 fw-bold mb-1">Departamento de Matemáticas</p>
                <p class="text-secondary fs-3 mb-4">CUCEI - Universidad de Guadalajara</p>
            </div>
            <div class="col-3 text-center">
                <p class="text-secondary fs-3">Visitas</p>
                <span class="badge text-bg-light fs-3">
                    <?php
                    echo $counterVal;
                    ?>
                </span>  
            </div>
        </div>
    </div>

    <!--Botones-->
    <div class="container mt-5 text-center botonera">
        <div class="row text-light g-5 justify-content-center">
            <div class="col-6 col-lg-3">
                <div id="element01" class="bg-dark p-4 rounded-3 hover-light">
                    <p class="m-0">Artículos JCR</p>
                    <i class="fa-solid fa-file-lines fs-1 mt-3"></i>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div id="element02" class="bg-dark p-4 rounded-3">
                    <p class="m-0">Libros y Capítulos</p>
                    <i class="fa-solid fa-book fs-1 mt-3"></i>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div id="element03" class="bg-dark p-4 rounded-3">
                    <p class="m-0">Desarrollos Tecnológicos</p>
                    <i class="fa-solid fa-microchip fs-1 mt-3"></i>                
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div id="element04" class="bg-dark p-4 rounded-3">
                    <p class="m-0">Tesis Dirigidas</p>
                    <i class="fa-solid fa-file-contract fs-1 mt-3"></i>              
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div id="element05" class="bg-dark p-4 rounded-3">
                    <p class="m-0">Artículos de difusión</p>       
                    <i class="fa-solid fa-laptop-file fs-1 mt-3"></i>         
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div id="element06" class="bg-dark p-4 rounded-3">
                    <p class="m-0">Clases</p>        
                    <i class="fa-solid fa-chalkboard-user fs-1 mt-3"></i>        
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div id="element07" class="bg-dark p-4 rounded-3">
                    <p class="m-0">Videos</p>       
                    <i class="fa-solid fa-circle-play fs-1 mt-3"></i>         
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div id="element08" class="bg-dark p-4 rounded-3">
                    <p class="m-0">Asesorías</p>               
                    <i class="fa-solid fa-person-chalkboard fs-1 mt-3"></i> 
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div id="element09" class="bg-dark p-4 rounded-3">
                    <p class="m-0">Tienda virtual</p>            
                    <i class="fa-solid fa-shop fs-1 mt-3"></i>    
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div id="element10" class="bg-dark p-4 rounded-3">
                    <p class="m-0">Contacto</p>           
                    <i class="fa-solid fa-address-card fs-1 mt-3"></i>     
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <div class="container-fluid bg-dark text-center text-light p-3 footer">
        <p>Derechos reservados ©1997 - 2022. Universidad de Guadalajara</p>
    </div>

    <script src="js/hover.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>