<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portafolio Web de Artista Ovetense">
	  <meta name="keywords" content="pintor,ovetense,murales,artistico,pintura,arte,artista,color,contemporaneo">
    <meta name="author" content="Roque Britez Rios">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>DanyPerry</title>

</head>
<body>

    <!--Munu-->
    <nav class="navbar navbar-expand-lg fixed-top" id="menu">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#acerca">Acerca de mi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tipo">Tipo de trabajos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mistrabajos">Murales artisticos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contacto">Contactame</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      
      <!--Fin del menu -->

    <!-- Cabecera -->
    <div id="cabecera" class="container-fluid mt-5">
        <div class="row">
            <div class="row" >
                <img class="img-fluid" aling="center" src="img/Foto-perfil.png" >
            </div>
            <div class="row">
              <a name="acerca"></a>
                <h1>¿Quien soy?</h1>
                
            </div>
            <div class="row">

                
                <div class="col text-center m-lg-4">
                <p style="font-size: 20px">Me dedico a la ejecución de toda clase de pinturas, tanto en interiores como exteriores (obra nueva y rehabilitaciones), ya sean pinturas convencionales, murales decorativos, imitaciones, veladuras, lucidos, barnizado de metales y maderas, aislamientos térmicos, etc… <br> 
                    Además, asesoro en proyectos de decoración en bares, restaurantes, locales y fachadas. También coloco papel pintado, fibra de vidrio, placas de imitaciones varias (madera, piedra, ladrillo, etc.)<br>
                    Cuento con mas de 20 años de experiencia. No dudes en ponerte en contacto conmigo. 
                </p>
                </div>
                

            </div>
        </div>
        
        
        
    </div>
    <!--Fin cabecera-->

    <!-- Tipos de trabajo -->
    <a name="tipo"></a>
      <div class="container" id="tipo-trabajos">
          
          <div class="album mt-2">
            <div class="container">
            <a name="tipo"></a>
                <h2 class="text-center mb-3">Tipo de trabajos</h2>
        
              <div class="row g-3 mb-2">

                <div class="col-md-3">
                  <div class="card border-0">
                    <img class="img-fluid" src="img/1.png" alt="">
                  </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0">
                      <img class="img-fluid" src="img/2.png" alt="">
    
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0">
                      <img class="img-fluid" src="img/3.png" alt="">
    
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0">
                      <img class="img-fluid" src="img/4.png" alt="">
    
                    </div>
                </div>

                
              </div>

              <div class="row g-3 mb-2">

                <div class="col-md-3">
                  <div class="card border-0">
                    <img class="img-fluid" src="img/5.png" alt="">
                  </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0">
                      <img class="img-fluid" src="img/6.png" alt="">
    
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0">
                      <img class="img-fluid" src="img/7.png" alt="">
    
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-0">
                      <img class="img-fluid" src="img/8.png" alt="">
    
                    </div>
                </div>

                
              </div>

            </div>





            </div>
          </div>
      </div>

      <!-- Portafolio Contenido Mis trabajos  -->
      
      <section class="page-section portfolio" id="portfolio">
        <div id="color" class="container">
        
            <!-- Portfolio Section Heading-->
            <!--<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>-->
            <a name="mistrabajos"></a>
            <h2 class="text-center" style="color:#D82148;">Murales artisticos</h2>
            <br>

            @yield('content')
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                
                
                
                
                
            
                
            </div>
        </div>
    </section>
        
        

      <div class="container-fluid mx-0 px-0" id="contacto">
          <div class="row">
            <div class="col"></div>
              <div class="col">
              <a name="contacto"></a>
                <p class="text-center"><h2>Contactame</h2></p>
                   
                    <div class="form-group">
                        <label for="Nombre">Nombre </label>
                        <input type="text" class="form-control">                           
                    </div>

                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control">     
                    </div>

                    <div class="form-group">
                        <label for="Correo">Correo </label>
                        <input type="text" class="form-control">     
                    </div>

                    <div class="form-group">
                        <label>Mensaje</label>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    
                    <br>
                    <p class="text-center"> <input class="btn btn-success"  type="submit" value="Enviar"></p>
                </div>
                <div class="col"></div>
          </div>
      </div>

      <div class="footer pt-4" id="footer">
      
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p class="text-center">
                <a href="https://www.instagram.com/"><img class="img-fluid" src="img/instagram.png"></a>
                <a href="https://www.facebook.com/"><img class="img-fluid" src="img/facebook.png"></a>
                <a href="https://twitter.com/?lang=es"><img class="img-fluid" src="img/gorjeo.png"></a>
                <br>
                Aviso legal | Política de Privacidad 
                <br>
                © 2022, Dany Perry 
                </p>
            </div>
            <div class="col"></div>
        </div>
      </div>


      

      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>