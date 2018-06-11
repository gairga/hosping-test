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
                        <th>Accion</th>
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
                     
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
          </div>
        </div>
      </div>  
  </body>
</html>