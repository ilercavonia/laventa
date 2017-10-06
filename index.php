<!DOCTYPE html>
<html lang="es">
<head>
	<title>Restaurante La Venta 1995</title>
	<meta charset=utf-8>
	<meta name="description" content="Restaurante La Venta 1995" />
	<meta name="keywords" content="restaurante, tarragona, casero, venta"/>
	
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/social.css" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis+Light' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
</head>
<body>
	<div id="map"></div>
	<div id="bf_container" class="bf_container">
		<div id="bf_background" class="bf_background">
			<img src="images/background/default.jpg" alt="image1" style="display:none;"/>
			<div class="bf_overlay"></div>
		</div>
		<div id="bf_page_menu" class="bf_menu" >
		<!-- <h1 class="title">La Venta 1995<span>Cocina casera</span></h1> -->
			<h1 class="title"><img src="images/Logo_blanco.png" width="90%" height="90%" alt=""><span>Cocina casera</span></h1>
			<ul>
				<li><a href="#" data-content="home"><span class="bf_hover"></span><span>Bienvenidos</span></a></li>
				<li><a href="#" data-content="about"><span class="bf_hover"></span><span>Sobre Nosotros</span></a></li>
				<li><a href="#" data-content="menu"><span class="bf_hover"></span><span>Nuestra Carta</span></a></li>
				<li><a href="#" data-content="visit"><span class="bf_hover"></span><span>Visítanos</span></a></li>
				<li><a href="#" data-content="contact"><span class="bf_hover"></span><span>Contáctanos</span></a></li>
			</ul>
		</div>
		<div class="bf_page" id="home" style="display:block;">
			<div class="bf_content_text">
				<h2><strong>Bienvenidos</strong></h2>
				<p>Ofrecemos un menú diario de lunes a sábado que incluye tres entrantes, tres primeros y tres segundos a elegir, el postre y la bebida por sólo <strong>9,50 €</strong>.</p>
				<p>Además,  disponemos de una amplia carta con variedad de ensaladas, llescas, carnes a la brasa y postres.</p>
				<p>Tampoco podemos olvidarnos de nuestros almuerzos de tenedor que desde las 8:30 hasta las 12:00 del mediodía hacen las delicias de nuestros comensales.</p>
			</div>
		</div>
		<div class="bf_page" id="about">
			<div class="bf_content_text">
				<h2>Sobre Nosotros</h2>
				<p>Restaurante La Venta abierto desde octubre de 1995.</p>
				<p>Cocina casera artesana y de primera calidad.</p>
				<p>La Venta es un lugar acogedor y cálido perfecto para realizar eventos: celebraciones y cenas para grupos, adaptandonos a nuestros clientes.</p>
				<p><b>Nuestro horario es:</b></p>
				<p> De lunes a sábado de 8:30 a 17:30 </p>
				<p> Noches de viernes y sábado de 20:00 a 00:00.</p>
<!-- 				<p><b>Dirección:</b> Calle Rio Garona, 20</p>	
				<p><b>Telf:</b> 977 54 09 14</p>
				<p><b>Email:</b>info@restaurantelaventa1995.com</p>
				<p><b>Telf:</b> 977 54 09 14</p> -->
			</div>
		</div>
		<div class="bf_page" id="menu">
			<div class="bf_content_text">
				<h2>Nuestra Carta</h2>
				<p>Amplia carta de carnes a la brasa,llescas y ensaladas. Con sugerencias de temporadas.</p>
				<ul id="bf_dishes">
					<li><a href="#"><img src="images/thumbs/1.jpg" alt="thumb1"/></a></li>
					<li><a href="#"><img src="images/thumbs/2.jpg" alt="thumb2"/></a></li>
					<li><a href="#"><img src="images/thumbs/3.jpg" alt="thumb3"/></a></li>
					<li><a href="#"><img src="images/thumbs/4.jpg" alt="thumb4"/></a></li>
					<li><a href="#"><img src="images/thumbs/5.jpg" alt="thumb5"/></a></li>
				</ul>
			</div>
			<div id="bf_gallery" class="bf_gallery">
				<a id="bf_close" href="#" class="bf_close"></a>
				<div class="bf_nav">
					<a id="bf_prev" href="#" class="bf_prev"></a>
					<a id="bf_next" href="#" class="bf_next"></a>
				</div>
				<div class="bf_gallery_wrapper">
					<div class="bf_gallery_item">
						<div class="bf_heading"><h2>LONGANIZA A LA BRASA</h2></div>
						<div class="bf_desc"><p style="font-size:30px">Plato tradicional y artesano. (Carne artesana de Alforja)</p></div>
						<img src="images/foreground/1.jpg" alt="image1" data-bgimg="images/background/1.jpg" />
					</div>
					<div class="bf_gallery_item">
						<div class="bf_heading"><h2>BACALAO CON SANFAINA</h2></div>
						<div class="bf_desc"><p style="font-size:30px">Bacalao con sofrito de verduras y chips de ajos.</p></div>
						<img src="images/foreground/2.jpg" alt="image1" data-bgimg="images/background/2.jpg" />
					</div>
					<div class="bf_gallery_item">
						<div class="bf_heading"><h2>HUEVOS CON FOIE</h2></div>
						<div class="bf_desc">
							<p style="font-size:22px">Base de patatas con huevos, foie fresco a la plancha y reduccion de vinagre de modena (ideal para compartir).</p></div>
						<img src="images/foreground/3.jpg" alt="image1" data-bgimg="images/background/3.jpg" />
					</div>
					<div class="bf_gallery_item">
						<div class="bf_heading"><h2>ENSALADA QUESO DE CABRA</h2></div>
							<div class="bf_desc">
								<p style="font-size:24px">Ensalada variada, crujiente de bacon, piñones y delicioso queso de cabra templado.</p>
						</div>
						<img src="images/foreground/4.jpg" alt="image1" data-bgimg="images/background/4.jpg" />
					</div>
					<div class="bf_gallery_item">
						<div class="bf_heading"><h2>ENTRECOT A LA BRASA</h2></div>
						<div class="bf_desc"><p style="font-size:30px">Autentico sabor a brasa.</p></div>
						<img src="images/foreground/5.jpg" alt="image1" data-bgimg="images/background/5.jpg" />
					</div>
				</div>
			</div>
		</div>
		<div class="bf_page" id="contact">
			<div class="bf_content_text">
				<h2>Contáctanos</h2>
				<p><b>Dirección:</b> Calle Rio Garona, 20</p>	
				<p><b>Telf:</b> 977 54 09 14</p>
				<p><b>Email:</b> info@restaurantelaventa1995.com</p>
				<p><b>Telf:</b> 977 54 09 14</p>
				<p><b>Haz tu reserva: </b> 601 073 444 - <img src="images/whatsapp.png" alt="whatsapp" /></p>			
				<p><b><img src="images/facebook.png" alt="Faceboock" /><a href="https://www.facebook.com/restaurantelaventa1995" style="color: white"><strong>  Faceboock</strong></a></b></p>		
				<p><b><img src="images/googleplus.png" alt="G+" /><a href="https://plus.google.com/+Laventa1995Tarragona" style="color: white"><strong>  Google+</strong></a></b></p>
			</div>
		</div>	
		<div class="bf_page" id="visit"></div>
	</div>
	<div class="bf_footer">
<!-- 			<a class="bf_left" href="http://"><span>&laquo; Previous Demo:</span> Circular Discography Template with jQuery</a>
			<a href="http://"><strong>@Ilercavonia</strong></a> -->
		<a class="bf_left" href="mailto:info@restaurantelaventa1995.com">info@restaurantelaventa1995.com</a>
		<a href="http://www.ilercavonia.com"><strong>Design by Ilercavonia</strong></a>
 		<span><a>&copy; 2014 Restaurante La Venta 1995</a></span>
<!-- 		 		<p class="bf_left"></p> -->
	</div>
	<!-- The JavaScript -->

	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
		ga('create', 'UA-49608201-1', 'restaurantelaventa1995.com');
		ga('require', 'displayfeatures');
		ga('send', 'pageview');
	</script>
	<!-- END Google Analytics -->
	
	<!-- the mousewheel plugin - optional to provide mousewheel support -->
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.template.min.js"></script>
</body>
</html>