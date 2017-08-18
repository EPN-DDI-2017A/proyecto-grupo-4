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
				<!--Sección menú LOGO-->
				<div class="row">
					<div class="col-xl-2 col-sm-3 col-xs-4 linea">
						<a href="index.php" >
							<center><img class="img-fluid" src="img/logorectopeq.png"  alt="Logotipo"></center>
						</a>
					</div>
					<!--Sección menú BÚSQUEDA-->
					<div class="col-xl-10 col-sm-9 col-xs-8 espacio">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-search fa-2	x img-fluid" aria-hidden="true"></i></span>
							</span>
							<input type="text" class="form-control" id="buscar" placeholder="Buscar iglesia...">
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
<!--Contenido General-->
<div class="container-fluid">
	<br>
    <div class="row">
    	<!--Contenido en fotos de iglesia-->
		<div class="col-xl-6 col-sm-7 col-xs-8">
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
		<div class="col-xl-6 col-sm-5 colo-xs-4 mapa" id="">
			<div class="row">+
				<div class="col">
					<div id="map"></div>
				</div>	
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col">
      <br>
      <center><p class="h6">@2017 3E Todos los derechos reservados - Diseño de Interfaces <p></center>
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
<!-- Modal -->

<!-- LauchDemo 1-->
<div class="modal fade" id="igsf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Iglesia San Francisco</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">Historia</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">Servicios</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">Galeria</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">Misas</a>
		      </li>
		    </ul>
		  </div>
		</nav>
		<div class="collapse" id="collapseExample1">
		  <div class="card card-block">
        <div class="text-center">
          <img class="img-fluid" src="img/iglesia0.png" alt="Iglesia San Francisco">
        </div>
              <p class="text-justify">
                San Fracisco, como obra, posee una rica historia que abarca hasta el imaginario popular. Hay una interesante leyenda con el indio Aunqui Hualca, hijo de Hualca, partidario de Rumiñahui, quien a su vez fue general de los ejércitos del Inca Atahualpa. El indio, en una etapa de infortunios, fue acogido por el español Hernán Juárez a quien le sirvió con lealtad. Desde ese momento el indio pasó a llamarse Francisco Cantuña.
                <br>
                Cantuña se comprometió a construir el atrio del templo de San Francisco, pero su tiempo era corto y presentaba dificultades para terminar en el plazo establecido. Así que hizo un pacto con el Diablo. Cantuña le entregaría su alma a cambio de la construcción del atrio. La obra demoró una noche y Cantuña no paraba de rezarle a la Virgen por temor de ser llevado al infierno. Cuando apareció el demonio, al atrio le hacía falta una piedra y por lo tanto el pacto se anuló y Cantuña se libró. Hasta la fecha, el atrio de San Francisco carece de una piedra.
              </p>
      </div> 
    </div>

		<div class="collapse" id="collapseExample2">
		  <div class="card card-block">
		    <div class="card-group">
          <div class="card">
            <img class="card-img-top img-fluid" src="img/catecismo.jpg" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Catecismo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/matrimonio.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Matrimonio</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/bautizo.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Bautizo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
		  </div>
		</div>
		<div class="collapse" id="collapseExample3">
		  <div class="card card-block">
		    <div class="card-group">
          
            <img class="img-fluid img-thumbnail" src="img/SanFranciso/1.jpg" alt="Card image cap">          
            <img class="img-fluid img-thumbnail" src="img/SanFranciso/2.jpg" alt="Card image cap">         
            <img class="img-fluid img-thumbnail" src="img/SanFranciso/3.jpg" alt="Card image cap">
            <img class="img-fluid img-thumbnail" src="img/SanFranciso/4.jpg" alt="Card image cap">   
      </div>
		  </div>
		</div>
		<div class="collapse" id="collapseExample4">
		  <div class="card card-block">
        <div class="container">
          <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
              <div id="my-calendar"></div>

            </div><!--(./col-lg-12 col-md-12 col-sm-12 col-xs-12"BELOW ROW:)-->
          </div><!--(./row)-->
        </div><!--(./COntainer")-->
		  </div>
		</div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- LauchDemo -->
<!-- LauchDemo 2-->
<div class="modal fade" id="iglc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Iglesia La Catedral</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample12" aria-expanded="false" aria-controls="collapseExample">Historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample22" aria-expanded="false" aria-controls="collapseExample">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample32" aria-expanded="false" aria-controls="collapseExample">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample42" aria-expanded="false" aria-controls="collapseExample">Misas</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="collapse" id="collapseExample12">
      <div class="card card-block">
        <div class="text-center">
          <img class="img-fluid" src="img/i2.jpg" alt="Iglesia La Catedral">
        </div>
              <p class="text-justify">
                Contiene un acumulado histórico de la vida cotidiana, política, religiosa y artística de varias generaciones quiteñas. Se encuentra ubicada en el corazón del centro histórico de Quito: la Plaza de la Independencia o Plaza Grande, exactamente en el Pasaje Espejo, entre las calles Venezuela y García Moreno, diagonal al Palacio de Carondelet.
                <br>
                La Catedral de Quito inició su edificación entre 1562 y 1567, y culminó en 1806 por obra del Presidente de la Real Audiencia: el Barón Héctor de Carondelet. Inicialmente en el siglo XVI, 1535, se levantó el templo con adobe y madera labrada. Posteriormente, en 1545, fue nombrada Catedral. Luego en 1562 se la demolió para reconstruirla con cimientos de piedra.
              </p>
      </div> 
    </div>

    <div class="collapse" id="collapseExample22">
      <div class="card card-block">
        <div class="card-group">
          <div class="card">
            <img class="card-img-top img-fluid" src="img/catecismo.jpg" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Catecismo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/matrimonio.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Matrimonio</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/bautizo.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Bautizo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample32">
      <div class="card card-block">
        <div class="card-group">
          
            <img class="img-fluid img-thumbnail" src="img/Catedral/1.jpg" alt="Card image cap">          
            <img class="img-fluid img-thumbnail" src="img/Catedral/2.jpg" alt="Card image cap">         
            <img class="img-fluid img-thumbnail" src="img/Catedral/3.jpg" alt="Card image cap">
            <img class="img-fluid img-thumbnail" src="img/Catedral/4.jpg" alt="Card image cap">   
      </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample42">
      <div class="card card-block">
        <div class="container">
          <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
              <div id="my-calendar1"></div>

            </div><!--(./col-lg-12 col-md-12 col-sm-12 col-xs-12"BELOW ROW:)-->
          </div><!--(./row)-->
        </div><!--(./COntainer")-->
      </div>
    </div> 
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- LauchDemo -->
<!-- LauchDemo 3-->
<div class="modal fade" id="iglco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Iglesia La Concepcion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample13" aria-expanded="false" aria-controls="collapseExample">Historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample23" aria-expanded="false" aria-controls="collapseExample">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample33" aria-expanded="false" aria-controls="collapseExample">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample43" aria-expanded="false" aria-controls="collapseExample">Misas</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="collapse" id="collapseExample13">
      <div class="card card-block">
        <div class="text-center">
          <img class="img-fluid" src="img/i3.jpg" alt="Iglesia La Concepcion">
        </div>
              <p class="text-justify">
                Bajo los auspicios de la orden de San Francisco, del obispo fray Pedro de la Peña y del gobierno de la Audiencia precedida por el presidente García de Valverde, se fundó el 13 de enero de 1577 el primer convento de monjas en Quito.
                <br>
                El clérigo Juan Yáñez fue uno de los más ansiosos por ver la fundación del convento, el cual debería prestar ayuda a los desposeídos, sin embargo no contó con suerte para ver su sueño en vida. A su muerte dejó tres mil pesos de plata para iniciar la obra.
                <br>
                El Gobernador de la Audiencia, licenciado García de Valverde, retomó la idea de Yáñez e inició una campaña para recaudar fondos en el vecindario y en el Cabildo de Quito. La recolecta y los tres mil pesos que legó el clérigo fueron suficientes para iniciar la fundación.
 
              </p>
      </div> 
    </div>

    <div class="collapse" id="collapseExample23">
      <div class="card card-block">
        <div class="card-group">
          <div class="card">
            <img class="card-img-top img-fluid" src="img/catecismo.jpg" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Catecismo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/matrimonio.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Matrimonio</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/bautizo.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Bautizo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample33">
      <div class="card card-block">
        <div class="card-group">
          
            <img class="img-fluid img-thumbnail" src="img/Concepcion/1.jpg" alt="Card image cap">          
            <img class="img-fluid img-thumbnail" src="img/Concepcion/2.jpg" alt="Card image cap">         
            <img class="img-fluid img-thumbnail" src="img/Concepcion/3.jpg" alt="Card image cap">
            <img class="img-fluid img-thumbnail" src="img/Concepcion/4.jpg" alt="Card image cap">   
      </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample43">
      <div class="card card-block">
        <div class="container">
          <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
              <div id="my-calendar1"></div>

            </div><!--(./col-lg-12 col-md-12 col-sm-12 col-xs-12"BELOW ROW:)-->
          </div><!--(./row)-->
        </div><!--(./COntainer")-->
      </div>
    </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- LauchDemo -->
<!-- LauchDemo 4-->
<div class="modal fade" id="iglm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Iglesia La Merced</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample14" aria-expanded="false" aria-controls="collapseExample">Historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample24" aria-expanded="false" aria-controls="collapseExample">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample34" aria-expanded="false" aria-controls="collapseExample">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample44" aria-expanded="false" aria-controls="collapseExample">Misas</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="collapse" id="collapseExample12">
      <div class="card card-block">
        <div class="text-center">
          <img class="img-fluid" src="img/i4.jpg" alt="Iglesia La Catedral">
        </div>
              <p class="text-justify">
                La estructura original de la iglesia fue reconstruida y modificada dos siglos después de su fundación, la cual tuvo lugar en el siglo XVI. Parte del convento de la Merced sufrió graves daños por el terremoto que sacudió a Quito el 28 de noviembre de 1778. Su restauración, financiada por la fortuna de los padres Albán, se inició con el levantamiento de la torre de cal y ladrillo, la misma que se asemeja a una mezquita musulmana. Casi en su ápice se alojan siete campanas que representan la escala natural musical.
                <br>
                Entre los atractivos se encuentra la biblioteca de dos pisos llenos de libros antiguos y pergaminos, los cuales contribuyen a reconocer la rica historia cultural de Quito y de su convento. Sus objetos representativos dan muestra de los alcances artísticos de la época, como el reloj de sol del siglo XVII ubicado en una pequeña cúpula, la fuente de piedra con un dios Neptuno tallado en el centro, las pinturas en la iglesia por Miguel de Santiago, Nicolás Gorábar, Bernardo Rodríguez y Manuel Samaniego, las catorce estaciones del Vía Crucis por la Judía Pinta, y varias pinturas por el Vencedor Mideros. Y desde luego, la campana del centro, denominada "Nuestra Madre", fundida en oro, plata, bronce y zinc.
 
              </p>
      </div> 
    </div>

    <div class="collapse" id="collapseExample24">
      <div class="card card-block">
        <div class="card-group">
          <div class="card">
            <img class="card-img-top img-fluid" src="img/catecismo.jpg" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Catecismo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/matrimonio.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Matrimonio</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/bautizo.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Bautizo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample34">
      <div class="card card-block">
        <div class="card-group">
          
            <img class="img-fluid img-thumbnail" src="img/Merced/1.jpg" alt="Card image cap">          
            <img class="img-fluid img-thumbnail" src="img/Merced/2.jpg" alt="Card image cap">         
            <img class="img-fluid img-thumbnail" src="img/Merced/3.jpg" alt="Card image cap">
            <img class="img-fluid img-thumbnail" src="img/Merced/4.jpg" alt="Card image cap">   
      </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample44">
      <div class="card card-block">
        <div class="container">
          <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
              <div id="my-calendar1"></div>

            </div><!--(./col-lg-12 col-md-12 col-sm-12 col-xs-12"BELOW ROW:)-->
          </div><!--(./row)-->
        </div><!--(./COntainer")-->
      </div>
    </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- LauchDemo -->
<!-- LauchDemo 5-->
<div class="modal fade" id="iglcom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Iglesia La Compania</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample15" aria-expanded="false" aria-controls="collapseExample">Historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample25" aria-expanded="false" aria-controls="collapseExample">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample35" aria-expanded="false" aria-controls="collapseExample">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample45" aria-expanded="false" aria-controls="collapseExample">Misas</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="collapse" id="collapseExample12">
      <div class="card card-block">
        <div class="text-center">
          <img class="img-fluid" src="img/i5.jpg" alt="Iglesia La Compañía">
        </div>
              <p class="text-justify">
                La Iglesia de la Compañía de Jesús fue construida en 1605 por los jesuitas, quienes fueron expulsados de la Real Audiencia de Quito debido al Edicto de destierro decretado en 1767 por Carlos III, Rey de España. Su edificación demoró alrededor de 163 años y estuvo abandonada hasta 1794. Luego de habérsele confiado a los frailes Camilos, la Compañía de Quito fue devuelta a los jesuitas en 1862 bajo la autorización del presidente Gabriel García Moreno.
                <br>
               Esta monumental obra arquitectónica ha sido objeto de un proceso de restauración integral desde que los terremotos destruyeron estructuras importantes como es el caso de la torre en 1868. Los trabajos históricos y arqueológicos, esenciales para la conservación del templo, se hicieron entre 1987 y 2005. Desde el 2006 los visitantes de todas partes del mundo han disfrutado de sus numerosos encantos bañados con siete toneladas de pan de oro.
              </p>
      </div> 
    </div>

    <div class="collapse" id="collapseExample25">
      <div class="card card-block">
        <div class="card-group">
          <div class="card">
            <img class="card-img-top img-fluid" src="img/catecismo.jpg" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Catecismo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/matrimonio.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Matrimonio</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/bautizo.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Bautizo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample35">
      <div class="card card-block">
        <div class="card-group">
          
            <img class="img-fluid img-thumbnail" src="img/Compania/1.jpg" alt="Card image cap">          
            <img class="img-fluid img-thumbnail" src="img/Compania/2.jpg" alt="Card image cap">         
            <img class="img-fluid img-thumbnail" src="img/Compania/3.jpg" alt="Card image cap">
            <img class="img-fluid img-thumbnail" src="img/Compania/4.jpg" alt="Card image cap">   
      </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample45">
      <div class="card card-block">
        <div class="container">
          <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
              <div id="my-calendar1"></div>

            </div><!--(./col-lg-12 col-md-12 col-sm-12 col-xs-12"BELOW ROW:)-->
          </div><!--(./row)-->
        </div><!--(./COntainer")-->
      </div>
    </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- LauchDemo -->
<!-- LauchDemo 6-->
<div class="modal fade" id="iglb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Iglesia La Basilica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample16" aria-expanded="false" aria-controls="collapseExample">Historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample26" aria-expanded="false" aria-controls="collapseExample">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample36" aria-expanded="false" aria-controls="collapseExample">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample46" aria-expanded="false" aria-controls="collapseExample">Misas</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="collapse" id="collapseExample16">
      <div class="card card-block">
        <div class="text-center">
          <img class="img-fluid" src="img/i2.jpg" alt="Iglesia La Catedral">
        </div>
              <p class="text-justify">
               Su historia está articulada con la de los Padres Misioneros Oblatos del Amor Divino al Corazón de Jesús y de María, la única Congregación de Sacerdotes nacida en el Ecuador, fundada por Julio María Matovelle. Esta se localiza en la calle Carchi 122 y Venezuela.
              <br>
              La majestuosa obra que es ahora La Basílica del Voto Nacional no hubiese sido posible sin la colaboración de los quiteños, quienes pagaron impuestos, implantados por el Estado en 1895 por la compra de sal, con el fin de recaudar fondos para la edificación. Igualmente el significativo esfuerzo de varias generaciones de picapedreros y la donación del terreno por los Padres Oblatos, hicieron de este recinto una de las basílicas más importantes de Latinoamérica. Es comparada con la Basílica de San Patricio, ubicada en Nueva York y con la Catedral de Notre Dame, de París.
              <br>
      </div> 
    </div>

    <div class="collapse" id="collapseExample26">
      <div class="card card-block">
        <div class="card-group">
          <div class="card">
            <img class="card-img-top img-fluid" src="img/catecismo.jpg" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Catecismo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/matrimonio.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Matrimonio</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/bautizo.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Bautizo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample36">
      <div class="card card-block">
        <div class="card-group">
          
            <img class="img-fluid img-thumbnail" src="img/Basilica/1.jpg" alt="Card image cap">          
            <img class="img-fluid img-thumbnail" src="img/Basilica/2.jpg" alt="Card image cap">         
            <img class="img-fluid img-thumbnail" src="img/Basilica/3.jpg" alt="Card image cap">
            <img class="img-fluid img-thumbnail" src="img/Basilica/4.jpg" alt="Card image cap">   
      </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample46">
      <div class="card card-block">
        <div class="container">
          <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
              <div id="my-calendar1"></div>

            </div><!--(./col-lg-12 col-md-12 col-sm-12 col-xs-12"BELOW ROW:)-->
          </div><!--(./row)-->
        </div><!--(./COntainer")-->
      </div>
    </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- LauchDemo -->
<!-- LauchDemo 7-->
<div class="modal fade" id="iges" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Iglesia El Sagrario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample17" aria-expanded="false" aria-controls="collapseExample">Historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample27" aria-expanded="false" aria-controls="collapseExample">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample37" aria-expanded="false" aria-controls="collapseExample">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample47" aria-expanded="false" aria-controls="collapseExample">Misas</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="collapse" id="collapseExample17">
      <div class="card card-block">
        <div class="text-center">
          <img class="img-fluid" src="img/i2.jpg" alt="Iglesia La Catedral">
        </div>
              <p class="text-justify">
               Se encuentra ubicada junto a la Catedral, en pleno corazón del centro histórico, en la calle García Moreno y Espejo. Su estructura data del siglo XVII y su enorme belleza la caracteriza un juego de esculturas, acabados y decoraciones de estilo renacentista.
              <br>
              El 4 de noviembre de 1694 el Arquitecto José Jaime Ortiz firmó el contrato para la construcción de la iglesia y ésta se incluiría en el Primer Libro de Catastro de los fundadores de la villa de Quito. Su fachada se terminó en 1706, y para 1715 se concluyó su edificación, entre 1731 y 1747 sus retablos. Todo esto fue posible gracias a la contribución financiera de la fraternidad del Sagrado Sacramento.
              <br>
              Para la construcción de la edificación fue necesario rellenar el lecho que dejó la canalización de la quebrada de El Tejar. Por esta razón se desarrolló una planta de cruz latina con una nave muy corta, es decir, una estructura formada por dos segmentos que se interceptan en un ángulo recto, donde la nave principal y la nave transversal tienen una longitud diversa. Este tipo de estructuras es obra de la arquitectura italiana.
              </p>
      </div> 
    </div>

    <div class="collapse" id="collapseExample27">
      <div class="card card-block">
        <div class="card-group">
          <div class="card">
            <img class="card-img-top img-fluid" src="img/catecismo.jpg" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Catecismo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/matrimonio.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Matrimonio</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/bautizo.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Bautizo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample37">
      <div class="card card-block">
        <div class="card-group">
          
            <img class="img-fluid img-thumbnail" src="img/Sagrario/1.jpg" alt="Card image cap">          
            <img class="img-fluid img-thumbnail" src="img/Sagrario/2.jpg" alt="Card image cap">         
            <img class="img-fluid img-thumbnail" src="img/Sagrario/3.jpg" alt="Card image cap">
            <img class="img-fluid img-thumbnail" src="img/Sagrario/4.jpg" alt="Card image cap">   
      </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample47">
      <div class="card card-block">
        <div class="container">
          <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
              <div id="my-calendar1"></div>

            </div><!--(./col-lg-12 col-md-12 col-sm-12 col-xs-12"BELOW ROW:)-->
          </div><!--(./row)-->
        </div><!--(./COntainer")-->
      </div>
    </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- LauchDemo -->
<!-- LauchDemo 8-->
<div class="modal fade" id="igsa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Iglesia San Agustin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample18" aria-expanded="false" aria-controls="collapseExample">Historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample28" aria-expanded="false" aria-controls="collapseExample">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample38" aria-expanded="false" aria-controls="collapseExample">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample48" aria-expanded="false" aria-controls="collapseExample">Misas</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="collapse" id="collapseExample18">
      <div class="card card-block">
        <div class="text-center">
          <img class="img-fluid" src="img/i2.jpg" alt="Iglesia La Catedral">
        </div>
              <p class="text-justify">
                Contiene un acumulado histórico de la vida cotidiana, política, religiosa y artística de varias generaciones quiteñas. Se encuentra ubicada en el corazón del centro histórico de Quito: la Plaza de la Independencia o Plaza Grande, exactamente en el Pasaje Espejo, entre las calles Venezuela y García Moreno, diagonal al Palacio de Carondelet.
                <br>
                La Catedral de Quito inició su edificación entre 1562 y 1567, y culminó en 1806 por obra del Presidente de la Real Audiencia: el Barón Héctor de Carondelet. Inicialmente en el siglo XVI, 1535, se levantó el templo con adobe y madera labrada. Posteriormente, en 1545, fue nombrada Catedral. Luego en 1562 se la demolió para reconstruirla con cimientos de piedra.
              </p>
      </div> 
    </div>

    <div class="collapse" id="collapseExample28">
      <div class="card card-block">
        <div class="card-group">
          <div class="card">
            <img class="card-img-top img-fluid" src="img/catecismo.jpg" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Catecismo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/matrimonio.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Matrimonio</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/bautizo.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Bautizo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample38">
      <div class="card card-block">
        <div class="card-group">
          
            <img class="img-fluid img-thumbnail" src="img/Agustin/1.jpg" alt="Card image cap">          
            <img class="img-fluid img-thumbnail" src="img/Agustin/2.jpg" alt="Card image cap">         
            <img class="img-fluid img-thumbnail" src="img/Agustin/3.jpg" alt="Card image cap">
            <img class="img-fluid img-thumbnail" src="img/Agustin/4.jpg" alt="Card image cap">   
      </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample48">
      <div class="card card-block">
        <div class="container">
          <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
              <div id="my-calendar1"></div>

            </div><!--(./col-lg-12 col-md-12 col-sm-12 col-xs-12"BELOW ROW:)-->
          </div><!--(./row)-->
        </div><!--(./COntainer")-->
      </div>
    </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- LauchDemo -->
<!-- LauchDemo 9-->
<div class="modal fade" id="igcb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Iglesia Carmen Bajo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample19" aria-expanded="false" aria-controls="collapseExample">Historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample29" aria-expanded="false" aria-controls="collapseExample">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample39" aria-expanded="false" aria-controls="collapseExample">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample49" aria-expanded="false" aria-controls="collapseExample">Misas</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="collapse" id="collapseExample19">
      <div class="card card-block">
        <div class="text-center">
          <img class="img-fluid" src="img/i2.jpg" alt="Iglesia La Catedral">
        </div>
              <p class="text-justify">
                Contiene un acumulado histórico de la vida cotidiana, política, religiosa y artística de varias generaciones quiteñas. Se encuentra ubicada en el corazón del centro histórico de Quito: la Plaza de la Independencia o Plaza Grande, exactamente en el Pasaje Espejo, entre las calles Venezuela y García Moreno, diagonal al Palacio de Carondelet.
                <br>
                La Catedral de Quito inició su edificación entre 1562 y 1567, y culminó en 1806 por obra del Presidente de la Real Audiencia: el Barón Héctor de Carondelet. Inicialmente en el siglo XVI, 1535, se levantó el templo con adobe y madera labrada. Posteriormente, en 1545, fue nombrada Catedral. Luego en 1562 se la demolió para reconstruirla con cimientos de piedra.
              </p>
      </div> 
    </div>

    <div class="collapse" id="collapseExample29">
      <div class="card card-block">
        <div class="card-group">
          <div class="card">
            <img class="card-img-top img-fluid" src="img/catecismo.jpg" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Catecismo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/matrimonio.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Matrimonio</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/bautizo.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Bautizo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample39">
      <div class="card card-block">
        <div class="card-group">
          
            <img class="img-fluid img-thumbnail" src="img/CarmenB/1.jpg" alt="Card image cap">          
            <img class="img-fluid img-thumbnail" src="img/CarmenB/2.jpg" alt="Card image cap">         
            <img class="img-fluid img-thumbnail" src="img/CarmenB/3.jpg" alt="Card image cap">
            <img class="img-fluid img-thumbnail" src="img/CarmenB/4.jpg" alt="Card image cap">   
      </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample49">
      <div class="card card-block">
        <div class="container">
          <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
              <div id="my-calendar1"></div>

            </div><!--(./col-lg-12 col-md-12 col-sm-12 col-xs-12"BELOW ROW:)-->
          </div><!--(./row)-->
        </div><!--(./COntainer")-->
      </div>
    </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- LauchDemo -->
<!-- LauchDemo 10-->
<div class="modal fade" id="igca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Iglesia Carmen Alto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample10" aria-expanded="false" aria-controls="collapseExample">Historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample20" aria-expanded="false" aria-controls="collapseExample">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample30" aria-expanded="false" aria-controls="collapseExample">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapseExample40" aria-expanded="false" aria-controls="collapseExample">Misas</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="collapse" id="collapseExample10">
      <div class="card card-block">
        <div class="text-center">
          <img class="img-fluid" src="img/i2.jpg" alt="Iglesia La Catedral">
        </div>
              <p class="text-justify">
                Contiene un acumulado histórico de la vida cotidiana, política, religiosa y artística de varias generaciones quiteñas. Se encuentra ubicada en el corazón del centro histórico de Quito: la Plaza de la Independencia o Plaza Grande, exactamente en el Pasaje Espejo, entre las calles Venezuela y García Moreno, diagonal al Palacio de Carondelet.
                <br>
                La Catedral de Quito inició su edificación entre 1562 y 1567, y culminó en 1806 por obra del Presidente de la Real Audiencia: el Barón Héctor de Carondelet. Inicialmente en el siglo XVI, 1535, se levantó el templo con adobe y madera labrada. Posteriormente, en 1545, fue nombrada Catedral. Luego en 1562 se la demolió para reconstruirla con cimientos de piedra.
              </p>
      </div> 
    </div>

    <div class="collapse" id="collapseExample20">
      <div class="card card-block">
        <div class="card-group">
          <div class="card">
            <img class="card-img-top img-fluid" src="img/catecismo.jpg" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Catecismo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/matrimonio.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Matrimonio</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/bautizo.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Bautizo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample30">
      <div class="card card-block">
        <div class="card-group">
          
            <img class="img-fluid img-thumbnail" src="img/CarmenA/1.jpg" alt="Card image cap">          
            <img class="img-fluid img-thumbnail" src="img/CarmenA/2.jpg" alt="Card image cap">         
            <img class="img-fluid img-thumbnail" src="img/CarmenA/3.jpg" alt="Card image cap">
            <img class="img-fluid img-thumbnail" src="img/CarmenA/4.jpg" alt="Card image cap">   
      </div>
      </div>
    </div>
    <div class="collapse" id="collapseExample40">
      <div class="card card-block">
        <div class="container">
          <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
              <div id="my-calendar9"></div>

            </div><!--(./col-lg-12 col-md-12 col-sm-12 col-xs-12"BELOW ROW:)-->
          </div><!--(./row)-->
        </div><!--(./COntainer")-->
      </div>
    </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- LauchDemo -->
<!--Librerias-->
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).on('load', function() { // makes sure the whole site is loaded 
			$('#loader').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(600).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({'overflow':'visible'});
		})
	//]]>
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/google.js"></script>
	<script type="text/javascript" src="js/capturadorEvento.js"></script>
  <script type="text/javascript" src="js/calendario.js"></script>
<!--FinLibrerias-->
</body>
</html>

<!--style="background-image: url(img/iglesia0.png); opacity: 0.5"-->

