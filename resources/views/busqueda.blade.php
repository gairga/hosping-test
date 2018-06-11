<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hosping-Test</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Hosping-Test</a>
        <a class="btn btn-primary" href="{{url('/clients')}}">Cliente</a>
      </div>

      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <a class="btn btn-primary" href="{{url('/hotels')}}">Panel Administrativo         (Hotelero)</a>
      </div>

      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <a class="btn btn-primary" href="{{url('/hotels')}}">Panel Administrativo (Admin)</a>
      </div>
    </nav>
    
    <div class="jumbotron" style="background-color: 
      #B6D0B2; margin-top: 50px;margin-bottom: 50px">
        <h3>Busca tu Alojamiento</h3>
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" value="Rio de Janerio" class="form-control form-control-lg" placeholder="Escribe tu lugar de destino">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Buscar</button>
                </div>
        </div>
          <div class="row">  
            <div class="col-md-4">
                <p class="lead mb-0">Fecha Llegada</p>
                <input class="date form-control"  type="text" id="datepicker" name="date">
            </div>
            <div class="col-md-4">
                <p class="lead mb-0">Fecha Salida</p>
                <input class="date form-control"  type="text" id="datepicker" name="date">
            </div>
            <div class="col-md-4">
                <p class="lead mb-0">Habitaciones</p>
                <select id="inputState" class="form-control">
                  <option selected>Seleccione...</option>
                    <option>Individual</option>
                    <option>Doble</option>
                    <option>Familiar</option>
                    <option>Multiple</option>
                </select>
            </div>
          </div>
        </div>
        
    </div>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
              
               
                  <h5>Filtros</h5>
                  <p>Selecciona los filtros que desees</p>
                 
                  <ul class="list-group">
                    <li class="list-group-item list-group-item-success">Cantidad de Personas +</li>
                    <li class="list-group-item list-group-item-info">Precio +</li>
                    <li class="list-group-item list-group-item-warning">Categoria del Hotel +</li>
                    <li class="list-group-item list-group-item-danger">Equipamiento de la Habitacion +</li>
                  </ul>
       
          </div>
          <div class="col-lg-8">
            <div class="media">
              <img class="mr-3 img-thumbnail rounded" width="160" height="160" src="img/losroques.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <div class="media">
              <img class="mr-3 img-thumbnail rounded" width="160" height="160" src="img/losroques.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <div class="media">
              <img class="mr-3 img-thumbnail rounded" width="160" height="160" src="img/losroques.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <div class="media">
              <img class="mr-3 img-thumbnail rounded" width="160" height="160" src="img/losroques.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">Comentarios de los Clientes!</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
              <h5>Margaret E.</h5>
              <p class="font-weight-light mb-0">"This is fantastic!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
              <h5>Fred S.</h5>
              <p class="font-weight-light mb-0">"Genial"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
              <h5>Sarah W.</h5>
              <p class="font-weight-light mb-0">"Super!"</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">Listo para saber las mejores ofertas? Registrate!</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contacto</a>
              </li>
              
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>

</html>