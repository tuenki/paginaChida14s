<?php
$Per = $ID = "";
if(!isset($_SESSION)){
  session_start();
  $Per = $_SESSION['Permiso'];
  $ID = $_SESSION['IDU'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/hover-min.css" media="all">
    <title>SIMUK</title>
</head>

<body>
     <?php if($Per == 1){ echo " ";
     ?>
     <div class="fixed-action-btn">
        <a class="btn-floating btn-large red"><i class="large material-icons">menu</i>
        </a>
        <ul>
          <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
          <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
        </ul>
      </div>
     <?php
        }?>

      
    <!---Barra menu --->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">otra</a></li>
        <li><a href="#!">otra</a></li>
        <li class="divider"></li>
        <li><a href="#!">otra</a></li>
    </ul>

    <nav>
        <div class="nav-wrapper  light-blue darken-1" >
          <a href="#!" class="brand-logo"><img src="images/vector logo/British-Council-white.png" alt="logo" height="45px"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#Cursos">Cursos</a></li>
            <li><a id="activate1" class="dropdown-button" href="#" data-activates="dropdown1">Examenes</a></li>
            <li><a href="#">Study-UK</a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="#">Arte, Educacion y Sociedad</a></li>
            <?php if($ID == ""){ echo " "; ?>
            <li><a href="login.php">Ingresar</a></li>
            
          <?php }else { echo " ";?>
            <li><a href="cerrarsess.php">Salir</a></li> 
            <?php 
            # code...
          } ?>
            
            

            <li><a class="modal-trigger" href="#modal1"><i class="material-icons">info_outline</i></a></li>
          </ul>

          <!--Menu chiquito bb (mobil)-->
          <ul class="side-nav" id="mobile-demo">
              <li><a href="#">Cursos de ingles</a></li>
              <li><a id="activate1" class="dropdown-button" href="#" data-activates="dropdown1">Examenes Internacionales y IELTS</a></li>
              <li><a href="#">Study UK</a></li>
              <li><a href="#">Eventos</a></li>
              <li><a href="#">Arte, Educacion y Sociedad</a></li>
              <li><a href="login.php">Ingresar</a></li>
              <li><a class="modal-trigger" href="#modal1"><i class="material-icons">info_outline</i></a></li>
          </ul>
        </div>
    </nav>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Info de la empresa</h4>
      <p>Mucha info mas de la empresa va Aqui</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
    </div>
  </div>

    <!--Aqui va todo-->
    <main>
         

        <!--Imagenes-->
      <div class="parallax-container">
        <div class="slider">
          <ul class="slides">
              <li>
                  <div class="parallax">
                  <img src="images/westminster-bridge-and-big-ben-london-uk-1635339.jpg" style="display: block; transform: translate3d(-50%,308px,0px);">
                  <div class="caption center-align">
                      <h3>British Council en México</h3>
                      <h5 class="light grey-text text-lighten-4"><p>Conectamos a la gente a través del aprendizaje e ideas creativas</p> <p>desde el Reino Unido.</p> </h5>

                    </div>
                </div>
              </li>
              <li>
                  <div class="parallax">
                  <img src="images/junun.jpeg" style="display: block; transform: translate3d(-50%,308px,0px);">
                  <div class="caption center-align">
                      <h3 class="light blue-text text-darken-2">Acercate a tus metas</h3>
                      <h5 class="light blue-text text-darken-2">Mejora tu nivel de ingles y cumple tus metas.</h5>
                      <a class="btn waves-effect white grey-text darken-text-2">Conoce mas</a>
                    </div>
                </div>
              </li>
              <li>
                  <div class="parallax">
                  <img src="images/buliding_1.jpg" style="display: block; transform: translate3d(-50%,308px,0px);">
                  <div class="caption center-align">
                      <h3>Tackling Violence</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                      <a class="btn waves-effect blue white-text darken-text-2">Conoce mas</a>
                    </div>
                </div>
              </li>
              <li>
                  <div class="parallax">
                  <img src="images/webp.net-resizeimage_2.png" style="display: block; transform: translate3d(-50%,308px,0px);">
                  <div class="caption center-align">
                      <h3 class="light white-text text-darken-2">Five on 5</h3>
                      <h5 class="light white-text text-darken-2">El 5 de octubre celebramos World Teachers' Day con 5 cursos gratuitos y en línea dedicados a conocer más sobre la enseñanza.</h5>
                      <a class="btn waves-effect white grey-text darken-text-2">Conoce mas</a>
                    </div>
                </div>
              </li>
            </ul>
        </div>
     </div>
        <!--Cards noticias-->
        <section class="section blue">
        <div class="container">
          <div class="row">
              <div class="col s12 m4">
                  <div class="card small hvr-grow">
                    <div class="card-image">
                      <img src="images/cards/lb2.png" >
                      <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                    </div>
                  </div>
                </div>

                <div class="col s12 m4">
                    <div class="card small hvr-grow">
                      <div class="card-image">
                        <img src="images/cards/lib.jpg">
                        <span class="card-title">Card Title</span>
                      </div>
                      <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                      </div>
                      <div class="card-action">
                        <a href="#">This is a link</a>
                      </div>
                    </div>
                  </div>

                  <div class="col s12 m4">
                      <div class="card small hvr-grow">
                        <div class="card-image">
                          <img src="images/cards/office.jpg">
                          <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                          <p>I am a very simple card. I am good at containing small bits of information.
                          I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                          <a href="#">This is a link</a>
                        </div>
                      </div>
                    </div>
                    
          </div>    
          <div class="row">
              <div class="col s12 m4">
                  <div class="card small hvr-grow">
                    <div class="card-image">
                      <img src="images/cards/lb2.png" >
                      <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                    </div>
                  </div>
                </div>

                <div class="col s12 m4">
                    <div class="card small hvr-grow">
                      <div class="card-image">
                        <img src="images/cards/lib.jpg">
                        <span class="card-title">Card Title</span>
                      </div>
                      <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                      </div>
                      <div class="card-action">
                        <a href="#">This is a link</a>
                      </div>
                    </div>
                  </div>

                  <div class="col s12 m4">
                      <div class="card small hvr-grow">
                        <div class="card-image">
                          <img src="images/cards/office.jpg">
                          <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                          <p>I am a very simple card. I am good at containing small bits of information.
                          I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                          <a href="#">This is a link</a>
                        </div>
                      </div>
                    </div>
                    
          </div>      
        </div>
      </section>  
      <section class="section white">
        <div class="row container">
          <h2 class="header" id="Cursos">Cursos</h2>
          <p>
              Hemos estado enseñando inglés durante más de 75 años, ayudando a más de 100 millones de personas en todo el mundo a mejorar sus habilidades de lectura, escritura, comprensión auditiva y expresión oral.
          </p>
          <p>
              Puedes aprender inglés y experimentar la cultura británica al tomar clases en nuestras escuelas del idioma o en nuestros cursos en línea.  Puede demostrar tu avance al presentar el IELTS, nuestro internacionalmente reconocido examen de competencia en el idioma inglés.
          </p>
          <div>
              <ul>
                  <li style="list-style-type: circle;">
                      "Podemos ayudarte a acelerar el aprendizaje de inglés de tus hijos, desarrollar su confianza y alentarlos a amar el inglés."
                  </li>

                  <li style="list-style-type: circle;">
                      Para los adultos, nuestra completa gama de cursos de inglés y exámenes te pueden apoyar a lo largo de la universidad, ayudarte a viajar, vivir y estudiar en el extranjero y mejorar tus oportunidades laborales.
                  </li>

                  <li style="list-style-type: circle;">
                      Con nosotros formarás parte de una comunidad global de estudiantes y te conectarás con la cultura británica
                  </li>

                </ul>
          </div>

          <div class="carousel">
              <a class="carousel-item" href="#one!"><img class="hvr-grow" src="images/3109129_Palace-of-Westminster-Image-by-chensiyuan.jpg" height="300px"></a>
              <a class="carousel-item" href="#two!"><img class="hvr-grow" src="images/42845107_296095030991783_3585595426352398336_o.jpg" height="300px"></a>
              <a class="carousel-item" href="#three!"><img class="hvr-grow" src="images/buliding_1.jpg" height="300px"></a>
              <a class="carousel-item" href="#four!"><img class="hvr-grow" src="images/junun.jpeg" height="300px"></a>
              <a class="carousel-item" href="#five!"><img class="hvr-grow" src="images/multicultural.jpg" height="300px"></a>
            </div>
                
         
        </div>
      </section>  
      <section class="section blue">
        <div class="row container">
          <h2 class="header white-text">Examenes</h2>
        </div>
      </section>
      <section class="section white">
        <div class="row container">
          <h2 class="header">Study-UK</h2>
        </div>
      </section>  
      <section class="section blue">
          <div class="row container">
            <h2 class="header white-text">Eventos</h2>
          </div>
        </section> 
      <section class="section white">
        <div class="row container">
          <h2 class="header">Actividades</h2>
        </div>
      </section>           
    </main>

    <!--Pie de pagina-->
    <footer class="page-footer light-blue darken-1">
        <div class="container">
          <div class="row">
            <div class="col s12 m6 l3">
              <h5 class="white-text">Aqui va algo</h5>
              <p class="grey-text text-lighten-4">Puedes utilizar filas y columnas para organizar la posicion de los elementos en el footer.</p>
            </div>
            <div class="col s12 m6 l3">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
              </ul>
            </div>
            <div class="col s12 m6 l3">
              <h5 class="white-text">Social</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
              </ul>
            </div>
            <div class="col s12 m6 l3">
                <h5 class="white-text">Social</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2018 SIMUK 
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          </div>
        </div>
    </footer>


    <!--Scripts-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/activar.js"></script>

</body>
</html>