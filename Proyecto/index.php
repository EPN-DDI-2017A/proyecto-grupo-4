<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bienvenidos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Api de google-->
	<script src="http://maps.googleapis.com/maps/api/js"> </script>
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
<!--Menu de carga-->
<div class="container-fluid">
	<div id="preloader">
	 	<!-- Cargando contenido a ser mostrado en página-->	
		<div id="loader">
		</div>
	</div>
</div>
<!--Menú principal-->
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<!--Sección menú -->
			<nav class="navbar bg-faded navbar-toggleable-md navbar-light" style="background-color:#53AED6;">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>	
				</button>
				<!--Sección menú LOGO-->
				<div class="col-2 linea">
					<a class="navbar-brand" href="#" >
						<img class="img-fluid" src="img/logorectopeq.png"  alt="Logotipo">
					</a>
				</div>
				<!--Sección menú BÚSQUEDA-->
				<div class="col-10 espacio">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-search fa-2	x img-fluid" aria-hidden="true"></i></span>
						</span>
						<input type="text" class="form-control" id="buscar" placeholder="Buscar iglesia...">
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>
<!--Contenido General-->
<div class="container-fluid">
	<br>
    <div class="row">
    	<!--Contenido en fotos de iglesia-->
		<div class="col-6">
			<div class="row scroll" id="contenidoIglesias">
				<div class="col-sm-6 cardp">
					<div class="card" style="background-image: url(img/iglesia0.png);">
						<div class="card-block">
							<h3 class="card-title">Special title treatment</h3>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 cardp" >
					<div class="card" style="background-image: url(img/iglesia1.png);">
						<div class="card-block">
							<h3 class="card-title">Special title treatment</h3>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>   
				<div class="col-sm-6 cardp">
					<div class="card" style="background-image: url(img/iglesia2.png);">
						<div class="card-block">
							<h3 class="card-title">Special title treatment</h3>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 cardp">
					<div class="card" style="background-image: url(img/iglesia3.png);">
						<div class="card-block">
							<h3 class="card-title">Special title treatment</h3>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>   
				<div class="col-sm-6 cardp">
					<div class="card" style="background-image: url(img/iglesia1.png);">
						<div class="card-block">
							<h3 class="card-title">Special title treatment</h3>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 cardp">
					<div class="card" style="background-image: url(img/iglesia0.png);">
						<div class="card-block">
							<h3 class="card-title">Special title treatment</h3>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>   
			</div>
		</div>    
		<!--Mapa de iglesias-->
		<div class="col-6">
			<div class="row">+
				<div class="col">
					<div id="map"></div>
				</div>	
			</div>
		</div>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iglesia San Franciso de Quito</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<center><img src="img/iglesia0.png" alt="Iglesia San Francisco de Quito" class="img-thumbnail"></center>
			<hr>
		  	<h5 class="text-center">Direccion</h5>
				<p class="text-center"->Rua Eng. Jose Bastos Xavier, nº 36, R/C 3750-144 Agueda</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Informate</button>
      </div>
    </div>
  </div>
</div>
<!--Librerias-->
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).on('load', function() { // makes sure the whole site is loaded 
			$('#loader').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({'overflow':'visible'});
		})
	//]]>
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/google.js"></script>
	<script type="text/javascript" src="js/capturadorEvento.js"></script>
<!--FinLibrerias-->
</body>
</html>

<!--style="background-image: url(img/iglesia0.png); opacity: 0.5"-->

