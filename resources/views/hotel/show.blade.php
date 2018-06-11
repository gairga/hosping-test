
<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hosping - Tests </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Panel Administrativo</h2><br  />
        <form method="post" action="#">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Nombre Hotel:</label>
            <input type="text" class="form-control" name="name" value="{{$hotel->name}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="descripcion">Descripción:</label>
              <input type="text" class="form-control" name="descripcion" value="{{$hotel->descripcion}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="direccion">Direccion:</label>
              <input type="text" class="form-control" name="direccion" value="{{$hotel->direccion}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">
                <lable>Status</lable>
                <select name="status">
                  <option value="1"  @if($hotel->status=="Activa") selected @endif>Activa</option>
                  <option value="2"  @if($hotel->status=="Inactiva") selected @endif>Inactiva</option>
                  
                </select>
            </div>
        </div>
        

            <div class="jumbotron" style="background-color: 
      #B6D0B2; margin-top: 50px;margin-bottom: 50px">
        <ul class="list-group">
                    <li class="list-group-item list-group-item-success">Galeria de Fotos +</li>
                    <li class="list-group-item list-group-item-info">Precio +</li>
                    <li class="list-group-item list-group-item-warning">Extras de la Habitacion +</li>
                     <li class="list-group-item list-group-item-danger">Equipamiento de la Habitacion +</li>
                    <li class="list-group-item list-group-item-danger">Equipamiento de la Habitacion +</li>
                  </ul>
            
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
      </form>
    </div>
  </body>
</html>
       