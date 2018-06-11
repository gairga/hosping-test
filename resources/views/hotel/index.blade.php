<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <!-- Navigation -->
      <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
          <a class="navbar-brand" href="{{url('/')}}">Hosping-Test</a>
          <a class="btn btn-primary" href="{{url('/clients')}}">Eres Cliente</a>
        </div>

        <div class="container">
          <a class="navbar-brand" href="#"></a>
          <a class="btn btn-primary" href="{{url('/hotels')}}">Panel Administrativo</a>
        </div>
      </nav>
    </div>
    
    <div class="jumbotron" style="background-color: 
      #B6D0B2; margin-top: 50px;margin-bottom: 50px">
        <h3>Lista de Hoteles Registrados</h3>
        <a class="btn btn-primary" href="{{url('/hotels/create')}}">Crear Hotel</a>
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <br />
                    @if (\Session::has('success'))
                      <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                      </div><br />
                     @endif
                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Hoteles</th>
                        <th>Descripcion</th>
                        <th>Dirección</th>
                        <th>Status</th>
                        <th colspan="2">Accion</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @foreach($hotels as $hotel)
                      <tr>
                        <td>{{$hotel['id']}}</td>
                        <td>{{$hotel['name']}}</td>
                        <td>{{$hotel['descripcion']}}</td>
                        <td>{{$hotel['direccion']}}</td>
                        <td>{{$hotel['status']}}</td>   
                        <td><a href="{{action('HotelController@edit', $hotel['id'])}}" class="btn btn-warning">Edit</a></td>
                        <td><a href="{{action('HotelController@show', $hotel['id'])}}" class="btn btn-warning">Ver</a></td>
                     
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
          </div>
        </div>
      </div> 
    </div>
    
    <div class="container">
        <div class="row no-gutters">
              <img class="rounded mx-auto d-block" src="../img/modelo.png" alt="">
              <div class="col-lg-12 order-lg-1 my-auto showcase-text">
                  <h2>Modelo de Datos</h2>

                  <p class="lead mb-0"><b>Puntos Importantes:</b></p>
                  <ul>
                    <li><b>Cantidad de Ocupantes: </b>Seria relevante tener un control de la cantidad de ocupantes para que el hotel pueda tener estadisticas de los mismo. Esto le permitita tener un mayor control de todo. Ej: El saber la cantidad de ocupantes que existe se podria determinar las cantidades que se servirian para un desayuno por ejemplo.
                    </li>
                    <li><b>Pagos:</b>Es importante contar con una tabla de pagos, en la cual se vea reflejado la trasaccion del cliente, metodos de pagos(transferencia, credito, debito), tipo pago (aprobado, rechazado, noprocesado...)                      
                    </li>
                    <li><b>Galeria de Imagenes:</b> Un item que podría contener:Videos, Galerias de Imagenes, Puntuación, Referencias de Usuarios, Redes Sociales.
                    </li>                   
                    <li><b>Control de las Habitaciones:</b>Se debería tener un control de las mismas mucho mas detallado. Donse se consideren items y validaciones, tales como:
                    <ol>
                      <li><b>Mantenimiento: </b>Se debería validar <b>DíAS</b> y <b>HORAS</b> en los cuales se realiza un mantenimiento o reparación</li> y en base a esto sera visible para el cliente o tendra la disponibilidad. Ejemplo: Si la habitación es desocupada a las 12:00 y el proceso de limpieza o  reparación finaliza a las 18:00, la misma no podra ser ocupada hasta finalizar las adecuaciones necesarias. Sin embargo deberia estar disponible si un usuario coloca hora de llegada luego de las 18:00   
                    </ol>
                    <ol>
                      <li><b>Reserva de Habitaciones: </b>Control de disponibilidad, status y dias de las habitaciones
                    </ol>
                    <ol>
                      <li><b>Log o control de Habitación: </b>Control y seguimiento de reparaciones o limpieza de habitaciones
                    </ol>
                      
                    </li>                 
                  </ul>
              </div>
          </div>
      </div>   


  </body>
</html>