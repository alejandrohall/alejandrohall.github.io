<?php
// check form  
if ($_POST['email'] != "") {
	// email de destino
	$email = "alejandropolvillo@gmail.com";
	
	// asunto del email
	$subject = "Contacto desde alejandrohall.com";
	
	// Cuerpo del mensaje
	$mensaje = "---------------------------------- \n";
	$mensaje.= "            Contacto               \n";
	$mensaje.= "---------------------------------- \n";
	$mensaje.= "NOMBRE:   ".$_POST['nombre']."\n";
	$mensaje.= "EMAIL:    ".$_POST['email']."\n";
	$mensaje.= "FECHA:    ".date("d/m/Y")."\n";
	$mensaje.= "HORA:     ".date("h:i:s a")."\n";
	$mensaje.= "IP:       ".$_SERVER['REMOTE_ADDR']."\n\n";
	$mensaje.= "---------------------------------- \n\n";
	$mensaje.= $_POST['mensaje']."\n\n";
	$mensaje.= "---------------------------------- \n";
	$mensaje.= "Enviado desde http://www.alejandrohall.com/ \n";
	
	// headers del email
	$headers = "From: ".$_POST['email']."\r\n";
	
	// Enviamos el mensaje
	if (mail($email, $subject, $mensaje, $headers)) {
		echo "<script type='text/javascript'>alert('Envio Correcto');</script>";
	} else {
		echo "<script type='text/javascript'>alert('Envio fallido');</script>";
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- meta tags -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- favicon -->
<link rel="icon" href="images/favicon.ico">

<!-- page title -->
<title>Alejandro Hall - Contacto</title>

<!-- css stylesheets -->
<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
<link rel="stylesheet" href="css/print.css" type="text/css" media="all">
<link rel="stylesheet" href="css/screen.css" media="screen, projection" type="text/css" />

</head>

<body id="contact-page">

	<a href="https://github.com/alejandrohall" target="_blank"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/567c3a48d796e2fc06ea80409cc9dd82bf714434/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png"></a>

	<div id="page-wrapper">
		<header id="header" role="banner">
			<ul class="header-menu">
				<li class="portfolio hexagon">
					<div class="hexagon-in1">
						<div class="hexagon-in2">
							<div class="inner">
								<a href="http://blog.alejandrohall.com/">
									<i class="icon-picture"></i>
									<span>Blog</span>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li class="profile hexagon">
					<div class="hexagon-in1">
						<div class="hexagon-in2">
							<div class="inner">
								<a href="profile.html">
									<i class="icon-vcard"></i>
									<span>Perfil</span>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li class="userpic hexagon">
					<div class="hexagon-in1">
						<div class="hexagon-in2">
							<a href="index.html"><img src="images/avatar.jpg" height="204" width="236" alt=""></a>
						</div>
					</div>
				</li>
				<li class="resume hexagon">
					<div class="hexagon-in1">
						<div class="hexagon-in2">
							<div class="inner">
								<a href="resume.html">
									<i class="icon-chat"></i>
									<span>Resumen</span>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li class="contact hexagon">
					<div class="hexagon-in1">
						<div class="hexagon-in2">
							<div class="inner">
								<a href="contact.html" class="active">
									<i class="icon-mail"></i>
									<span>Contacto</span>
								</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</header><!-- /#header -->
		
		<section id="main">
			<div class="page-title">
				<h1>Contacto</h1>
			</div>
			<div class="contact-address">
				Sevilla<br/>
				Andalucía, España.
			</div>
			<div class="cotent-wrapper">
				<div class="map">
					<div id="map_canvas"></div>
					
				</div>
				
				<div class="contact-details">
					<div class="left-col">
						<form action="" method="post">
							<div class="form-item">
								<label for="nombre">Nombre:</label>
								<input type="text" name="nombre" id="nombre" placeholder="ej: Pedro Sánchez">
							</div>
							<div class="form-item">
								<label for="email">Email:</label>
								<input type="email" name="email" id="email" placeholder="ejemplo@dominio.com">
							</div>
							<label for="mensaje">Mensaje:</label>
							<textarea name="mensaje" id="mensaje" cols="30" rows="4"></textarea>
							<input type="submit" value="Enviar" name="btsend" id="btsend" class="form-submit">

						</form>
					</div>
					<div class="right-col">
						<h2>Información de contacto</h2>
						<p class="icon-user"><strong>Alejandro Hall</strong></p>
						<p class="icon-skype">@apolvilloh</p>
						<p class="icon-mail"><a href="mailto:alejandropolvillo@gmail.com">alejandropolvillo@gmail.com</a></p>
					</div>
				</div>
			</div>
		</section>
		
		<footer id="footer" role="contentinfo">
			<ul>
				<li class="twitter hexagon">
					<div class="hexagon-in1">
						<div class="hexagon-in2">
							<div class="inner">
								<a href="https://twitter.com/Alejandro_Hall" target="_blank">
									<i class="icon-twitter"></i>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li class="gplus hexagon">
					<div class="hexagon-in1">
						<div class="hexagon-in2">
							<div class="inner">
								<a href="https://plus.google.com/u/0/115053640079939281390/about" target="_blank">
									<i class="icon-gplus"></i>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li class="copyright">©2014 <br /> Todos los derechos reservados</li>
				<li class="linkedin hexagon">
					<div class="hexagon-in1">
						<div class="hexagon-in2">
							<div class="inner">
								<a href="http://es.linkedin.com/in/alejandrohall" target="_blank">
									<i class="icon-linkedin"></i>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li class="facebook hexagon">
					<div class="hexagon-in1">
						<div class="hexagon-in2">
							<div class="inner">
								<a href="https://www.facebook.com/alejandro.polvillohall" target="_blank">
									<i class="icon-facebook"></i>
								</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
	    </footer><!-- /#footer -->
	</div>
	
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<script>
	  function initialize() {
	    var map_canvas = document.getElementById('map_canvas');
	    var map_options = {
	      center: new google.maps.LatLng(37.3890924, -5.984458899999936),
	      zoom: 15,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    }
	    var map = new google.maps.Map(map_canvas, map_options)
	  }
	  google.maps.event.addDomListener(window, 'load', initialize);
	</script>

</body>
</html>
