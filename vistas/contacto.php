<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
   
  <div id="container">
  <div class="navT ">
    <div class="icon pull-left"></div>
  <div class="logo pull-right">
    <img src="../img/zens.png" alt="ZENS" class="img-responsive">
  </div>
  </div>
  
  <div id="menu">
    <ul>
      <li><a href="../index.php">INDEX</a></li>
      <li><a href="nosotros.php">NOSOTROS</a></li>
      <li><a href="servicios.php">SERVICIOS</a></li>
      <li><a href="contacto.php">CONTACTO</a></li>
    </ul>
  </div>
</div>

<div class="bannerc">
  <div class="fondo">
    <p class="titc">CONTACTO</p>
    <p class="subtit">Nuestra experiencia, es nuestro sello de garantía, contáctanos juntos encontraremos una estrategia para aumentar tus ventas.</p>
    <div class="boton" style="margin-top: 5%; text-align: center;">
        <a href="contacto.php"><button type="button" class="btn btn-danger btn-lg">CONTACTANOS</button></a>
    </div>
  </div>
</div>

<div class="section" style="padding: 5% 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <i style="color: #72103D;" class="fa fa-street-view fa-5x" aria-hidden="true"></i>
            <h2 class="text-center">DIRECCION</h2>
            <p class="text-justify">C. Club Campestre #365 M20 L60 por San Marino y Circuito Sur. Col. Campanario. Tuxtla Gutierrez, Chiapas. C.P. 29057</p>
          </div>
          <div class="col-md-3">
            <i style="color: #72103D;" class="fa fa-phone fa-5x" aria-hidden="true"></i>
            <h2 class="text-center">TELEFONO</h2>
            <p class="text-center">PENDIENTE</p>
          </div>
          <div class="col-md-3">
            <i style="color: #72103D;" class="fa fa-clock-o fa-5x" aria-hidden="true"></i>
            <h2 class="text-center">HORARIO</h2>
            <p class="text-center">Lunes a Viernes de 9 am a 6 pm</p>
          </div>
          <div class="col-md-3">
            <i style="color: #72103D;" class="fa fa-envelope fa-5x" aria-hidden="true"></i>
            <h2 class="text-center">CORREO</h2>
            <p class="text-center">info@publicidadzens.com</p>
          </div>
        </div>
      </div>
    </div>

    <div class="section" style="padding: 5% 0%; background-color: #72103D;">
    	<div class="container">
    		<div class="row">
    	  <div class="col-md-8 col-md-offset-2">
    	    <div class="well well-sm">
    	      <form class="form-horizontal" action="" method="post">
    	      <fieldset>
    	        <legend class="text-center">Formulario de contacto</legend>
    	
    	        <!-- Name input-->
    	        <div class="form-group">
    	          <label class="col-md-3 control-label" for="name">Nombre</label>
    	          <div class="col-md-9">
    	            <input id="name" name="name" type="text" placeholder="Escribe tu nombre completo" class="form-control">
    	          </div>
    	        </div>
    	
    	         <!-- Tel input-->
    	        <div class="form-group">
    	          <label class="col-md-3 control-label" for="name">Teléfono</label>
    	          <div class="col-md-9">
    	            <input id="name" name="name" type="text" placeholder="Escribe tu teléfono completo" class="form-control">
    	          </div>
    	        </div>
    	
    	        <!-- Email input-->
    	        <div class="form-group">
    	          <label class="col-md-3 control-label" for="email">Correo</label>
    	          <div class="col-md-9">
    	            <input id="email" name="email" type="text" placeholder="Escribe tu correo completo" class="form-control">
    	          </div>
    	        </div>
    	
    	        <!-- Message body -->
    	        <div class="form-group">
    	          <label class="col-md-3 control-label" for="message">Comentario</label>
    	          <div class="col-md-9">
    	            <textarea class="form-control" id="message" name="message" placeholder="Escribe tu comentario" rows="5"></textarea>
    	          </div>
    	        </div>
    	
    	        <!-- Form actions -->
    	        <div class="form-group">
    	          <div class="col-md-12 text-right">
    	            <button type="submit" class="btn btn-warning btn-lg">ENVIAR</button>
    	          </div>
    	        </div>
    	      </fieldset>
    	      </form>
    	    </div>
    	  </div>
    		</div>
    	</div>
    </div>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/funciondthc.js"></script>
<script src="../js/requerido.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/menu.js"></script>
</body>
</html>