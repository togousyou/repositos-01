<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->

<!DOCTYPE html>
<html>
<?php
    
require('login/conexion.php');
 $numerore=$_POST["numerore"];
 $cedula=$_POST["cedula"];

    if(isset($_POST["cedula"]) && isset($_POST["numerore"])){
  $numerore = mysqli_real_escape_string($mysqli, $_POST["numerore"]);
  $cedula = mysqli_real_escape_string($mysqli, $_POST["cedula"]);
    $query="SELECT numerore,nombre,apellido,cedula,direccion,telefono,email,horaingreso,horasalida,marca,modelo,kilometro,color,placa,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8,direccionales,llantas,farrolas,exploradoras,radios,bocinas,llaves,alarma,otros,diganostico,cambioaceite,marcaaceite,kilometrajeaceite,proximocambio,reparacion 
     FROM clientes WHERE cedula='$cedula'AND numerore='$numerore'";
  $result = mysqli_query($mysqli, $query);
  $num_row = mysqli_num_rows($result);
   $row=$result->fetch_assoc();
  if ($num_row == "1") {
    $data = mysqli_fetch_array($result);

  
  } else {
    $mensaje="No se encontro registro ";
    $url='index.php?mensaje='.$mensaje;
     echo "<script> parent.location.href='$url';</script>";
  }
  } else {
   
  }


   
      
  
    
?>
<head>
    <title>Historia | clínica  | Togousyou</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="Free singlepage web template created by GraphBerry">
    <meta name="keywords" content="HTML5, Bootstrap 3, CSS3, javascript, PHP, Responsive, Mobile">
    <meta name="author" content="GraphBerry.com"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href=”css/movil.css” rel=”stylesheet” type=”text/css” media=”handheld, only screen and (max-device-width: 480px)” />
</head>
<body>
    <header>
   <div class="testimonial2">
        <div class="mask">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="single-testimonial2">
                            <i class=""></i>
                            <H3>| AUTO | MAZDA | </H3>
                            <h6>| TALLER | DE | MECÁNICA| </h6>
                            </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
   
<section id="about">
<div class="testimonial">
        <div class="mask1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="single-testimonial">
                            <i class=""></i>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial2">
        <div class="mask">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="single-testimonial2">
                            <i class=""></i>
                            <H3>| HISTORIA | CLÍNICA |</H3>
                            <h6>| DATOS | DEL | USUARIO |</h6>
                            </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
   
    <div class="container">
        <div class="row">
        <div class="col-md-4">
                <h3>NOMBRE</h3>
                <p><?php echo $row['nombre']; ?></p>
                </div>
                <div class="col-md-4">
                <h3>APELLIDO</h3>
                <p><?php echo $row['apellido']; ?></p>
                </div>
                <div class="col-md-4">
                <h3>CEDULA</h3>
                <p><?php echo $row['cedula']; ?></p>
                </div>
                <div class="col-md-4">
                <h3>DIRECCIÓN</h3>
                <p><?php echo $row['direccion']; ?></p>
                </div>
                <div class="col-md-4">
                <h3>TELÉFONO</h3>
                <p><?php echo $row['telefono']; ?></p>
                </div>
                <div class="col-md-4">
                <h3>EMAIL</h3>
                <p><?php echo $row['email']; ?></p>
                </div>
                <div class="col-md-4">
                <h3>HORA DE INGRESO</h3>
                <p>(<?php echo $row['horaingreso']; ?>).</p>
                </div>
                <div class="col-md-4">
                <h3>HORA DE SALIDA</h3>
                <p>(<?php echo $row['horasalida']; ?>).</p>
                </div>
            <div class="col-md-8 col-md-offset-2">
               
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
              
            </div>
        </div>
    </div>
    <div class="testimonial1">
        <div class="mask1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="single-testimonial2">
                            <i class=""></i>
                            <H3>| HISTORIA |  CLÍNICA | </H3>
                            <h6>| CONTROL | AUTO |</h6>
                         </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-md-4">
                <h3>MARCA</h3>
                <p><?php echo $row['marca']; ?>.</p>
                </div>
                <div class="col-md-4">
                <h3>MODELO</h3>
                <p><?php echo $row['modelo']; ?>.</p>
                </div>
                <div class="col-md-4">
                <h3>KILOMETROS</h3>
                <p><?php echo $row['kilometro']; ?>.</p>
                </div>
                <div class="col-md-4">
                <h3>COLOR</h3>
                <p><?php echo $row['color']; ?>.</p>
                </div>
                <div class="col-md-4">
                <h3>PLACA</h3>
                <p><?php echo $row['placa']; ?>.</p>
                </div>
            </div>
            </div>
            </div>
            </div>
        <div class="testimonial1">
        <div class="mask1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="single-testimonial2">
                            <i class=""></i>
                            <H3>| HISTORIA |  CLÍNICA | </H3>
                            <h6>| EVIDENCIA | FOTOGRÁFICA |</h6>
                         </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
     </div>
        </div>
        </div>
        <div class="row team">
            <div class="col-md-3 col-sm-6">
                <div class="team-member">
                    <img src="login/<?php echo $row['foto1']; ?>" class="img-responsive">
                    <h6>TOGOUSYOU</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-member">
                    <img src="login/<?php echo $row['foto2']; ?>" class="img-responsive">
                    <h6>TOGOUSYOU</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-member">
                    <img src="login/<?php echo $row['foto3']; ?>" class="img-responsive">
                    <h6>TOGOUSYOU</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-member">
                    <img src="login/<?php echo $row['foto4']; ?>" class="img-responsive">
                    <h6>TOGOUSYOU</h6>
                </div>

            </div>
             <div class="col-md-3 col-sm-6">
                <div class="team-member">
                    <img src="login/<?php echo $row['foto5']; ?>" class="img-responsive">
                    <h6>TOGOUSYOU</h6>
                </div>

            </div> 
            <div class="col-md-3 col-sm-6">
                <div class="team-member">
                    <img src="login/<?php echo $row['foto6']; ?>" class="img-responsive">
                    <h6>TOGOUSYOU</h6>
                </div>

            </div>
             <div class="col-md-3 col-sm-6">
                <div class="team-member">
                    <img src="login/<?php echo $row['foto7']; ?>" class="img-responsive">
                    <h6>TOGOUSYOU</h6>
                </div>

            </div>
             <div class="col-md-3 col-sm-6">
                <div class="team-member">
                    <img src="login/<?php echo $row['foto8']; ?>" class="img-responsive">
                    <h6>TOGOUSYOU</h6>
                </div>

            </div>
        </div>
      
                
            </div>
        </div>
        <div class="testimonial2">
        <div class="mask">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="single-testimonial2">
                            <i class=""></i>
                            <H3>| HISTORIA |  CLÍNICA | </H3>
                            <h6>| ESTADO | DEL | AUTO |</h6>
                            </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4">
                <h3>DIRECCIONALES</h3>
                <p>1 | <?php echo $row['direccionales']; ?></p>
                </div>
                  <div class="col-md-4">
                <h3>LLANTAS</h3>
                <p>1 | <?php echo $row['llantas']; ?></p>
                 </div>
                 <div class="col-md-4">
                <h3>FAROLAS</h3>
                <p>1 | <?php echo $row['farrolas']; ?>.</p>
                </div>
                 <div class="col-md-4">
                <h3>RADIO O PLANTA</h3>
                <p>1 | <?php echo $row['radios']; ?>.</p>
                </div>
                 <div class="col-md-4">
                <h3>BOCINAS </h3>
                <p>1 | <?php echo $row['bocinas']; ?></p>
                </div>
                 <div class="col-md-4">
                <h3>LLAVES</h3>
                <p>1 | <?php echo $row['llaves']; ?></p>
                </div>
                 <div class="col-md-4">
                <h3>ALARMA</h3>
                <p>1 | <?php echo $row['alarma']; ?></p>
                </div>
                

                <div class="col-md-4">
                <h3>OTROS</h3>
                <p><?php echo $row['otros']; ?></p>
                </div>
                

        </div>
        </div>
    </div>

      
                
            </div>
        </div>

        <section id="about">
<div class="testimonial3">
        <div class="mask1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="single-testimonial2">
                            <i class=""></i>
                            <H3>| HISTORIA |  CLÍNICA | </H3>
                            <h6>| DIAGNOSTICO | DEL | AUTO | </h6>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-md-4">
                <h3>DOCUMENTACIÓN</h3>
                <p><?php echo $row['diganostico']; ?>.</p>
                </div>
               
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
              
            </div>
        </div>
    </div>
    <section id="about">
<div class="testimonial3">
        <div class="mask1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="single-testimonial2">
                            <i class=""></i>
                            <H3>| HISTORIA |  CLÍNICA | </H3>
                            <h6>| CAMBIO | DE | CONSUMIBLES | </h6>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-md-4">
                <h3>CAMBIO DE ACEITE</h3>
                <p><?php echo $row['cambioaceite']; ?></p>
                </div>
                <div class="col-md-4">
                <h3>MARCA</h3>
                <p><?php echo $row['marcaaceite']; ?></p>
                </div>
                <div class="col-md-4">
                <h3>KILOMETRAJE</h3>
                <p><?php echo $row['kilometrajeaceite']; ?>.</p>
                </div>
                <div class="col-md-4">
                <h3>PRÓXIMO CAMBIO</h3>
                <p><?php echo $row['proximocambio']; ?>.</p>
                </div>
                <div class="col-md-4">
                <h3>REPARACIÓN Y CAMBIO DE PARTES</h3>
                <p><?php echo $row['reparacion']; ?>.</p>
                </div>
                
            <div class="col-md-8 col-md-offset-2">
               
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
              
            </div>
        </div>
    </div>
    <section id="about">
<div class="testimonial3">
        <div class="mask1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="single-testimonial2">
                            <i class=""></i>
                            <H3>| HISTORIA |  CLÍNICA | </H3>
                            <h6>| CONTACTO | </h6>
                        </div>  
                    </div> 
                </div>
         
        <div class="row">
            <div class="col-md-4">
              
            </div>
        </div>
    </div>
    
                 
</section>

<br>

        <div class="row">
            <address class="col-md-4">
             <i class="fa fa-envelope"></i>
             <span>tecnicar@togousyou.co</span>
         </address>
         <address class="col-md-4">
            <span>
                <i class="fa fa-home"></i>
                Barrio Cespedes<br>
                Carrera 30 # 23-34
            </span>
        </address>
        <address>
            <i class="fa fa-phone"></i>
            <span>(+57) 316 850 1370</span>
        </address>
    </div>
    
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            <img src="img/logo-white.png" class="logo-footer" />
                <ul class="social">
                    <li class="wow bounceIn"><a href="https://www.facebook.com/togousyou/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="wow bounceIn" data-wow-delay="0.2s"><a href="https://www.instagram.com/togousyou/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li class="wow bounceIn" data-wow-delay="0.2s"><a href="http://togousyou.co/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                    
                
                </ul>
                
            </div>
        </div>
    </div>
</footer>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/jquery.mixitup.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/smooth-scroll.js"></script>
<script src="js/custom.js"></script>
</body>
</html>