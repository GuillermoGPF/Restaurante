

<?php

				error_reporting(E_ERROR | E_WARNING | E_PARSE);
			

					$nombre = $_POST['nombre'];
					$telefono = $_POST['telefono'];
					$fecha = $_POST['fecha'];
					$observaciones = $_POST['observ'];

					$marisco = $_POST['marisco'];
					$añadir1 = $_POST['more-paella1'];

					$pollo = $_POST['pollo'];
					$añadir2 = $_POST['more-paella2'];

					$mixta = $_POST['mixta'];
					$añadir3 = $_POST['more-paella3'];

					$conejo = $_POST['conejo'];
					$añadir4 = $_POST['more-paella4'];


					$francesa = $_POST['francesa'];
					$añadir5 = $_POST['more-tortilla1'];

					$sin = $_POST['sin'];
					$añadir6 = $_POST['more-tortilla2'];

					$con = $_POST['con'];
					$añadir7 = $_POST['more-tortilla3'];


					$casa = $_POST['casa'];
					$añadir8 = $_POST['more-burguer1'];

					$bpollo = $_POST['bpollo'];
					$añadir9 = $_POST['more-burguer2'];

					$queso = $_POST['queso'];
					$añadir10 = $_POST['more-burguer3'];

					$chivito = $_POST['chivito'];
					$añadir11 = $_POST['more-burguer4'];


					$jamon = $_POST['jamon'];
					$añadir12 = $_POST['more-croqueta1'];

					$cpollo = $_POST['cpollo'];
					$añadir13 = $_POST['more-croqueta2'];

					$boletus = $_POST['boletus'];
					$añadir14 = $_POST['more-croqueta3'];

					$verdura = $_POST['verdura'];
					$añadir15 = $_POST['more-croqueta4'];


					$destinatario = "working.gpf@gmail.com";
					$titulo = "Encargos";
					$cuerpo = '
								<html>
								<head>
									<title>Restaurante Los Retiros</title>
								</head>
								<body style="border: double 5px #67a535;">

									<h3 style="color:#7ecc3f; margin-left: 5px;">
									Datos de contacto para encargo</h3>
										
									<p><b style="color:#7ecc3f; margin-left: 5px;">
									-Nombre: </b> '.$nombre.'</p>

									<p><b style="color:#7ecc3f; margin-left: 5px;">
									-Teléfono: </b> '.$telefono.'</p>

									<p><b style="color:#7ecc3f; margin-left: 5px;">
									-Encargo: </b></p>


									<p><b style="margin-left: 10px;"></b>'
									.$marisco.$añadir1.'<p>

									<p><b style="margin-left: 10px;"></b>'
									.$pollo.$añadir2.'<p>

									<p><b style="margin-left: 10px;"></b>'
									.$mixta.$añadir3.'<p>

									<p><b style="margin-left: 10px;"></b>'
									.$conejo.$añadir4.'<p>


									<p><b style="margin-left: 10px;"></b>'
									.$francesa.$añadir5.'<p>

									<p><b style="margin-left: 10px;"></b>'
									.$sin.$añadir6.'<p>

									<p><b style="margin-left: 10px;"></b>'
									.$con.$añadir7.'<p>


									<p><b style="margin-left: 10px;"></b>'
									.$casa.$añadir8.'<p>

									<p><b style="margin-left: 10px;"></b>'
									.$bpollo.$añadir9.'<p>

									<p><b style="margin-left: 10px;"></b>'
									.$queso.$añadir10.'<p>

									<p><b style="margin-left: 10px;"></b>'
									.$chivito.$añadir11.'<p>


									<p><b style="margin-left: 10px;"></b>'
									.$jamon.$añadir12.'<p>

									<p><b style="margin-left: 10px;"></b>'
									.$cpollo.$añadir13.'<p>

									<p><b style="margin-left: 10px;"></b>'
									.$boletus.$añadir14.'<p>

									<p><b style="margin-left: 10px;"></b>'
									.$verdura.$añadir15.'<p>


									<p><b style="color:#7ecc3f; margin-left: 5px;">
									-Día de recogida: </b> '.$fecha.'</p>


									<p><b style="color:#7ecc3f; margin-left: 5px;">
									-Observaciones: </b> '.$observaciones.'</p>

									<p><b style="color:#7ecc3f; margin-left: 5px;"> 
									-Fecha: </b> '.date('d/m/Y' , time()).'</p>

								</body>
								</html>';

					$headers = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
					$headers .= 'From: Restaurante@restaurante.com' . "\r\n";
					$headers .= "X-Mailer: PHP/".phpversion()."\r\n";


					$mail = mail($destinatario, $titulo, $cuerpo, $headers);

					if($mail) {
					 echo '<script type="text/javascript">
							alert("Su pedido se ha realizado con éxito");
							window.location.href="index.html";</script>';
					} 
					else{
					 echo '<script type="text/javascript">
							alert("Ha ocurrido un error al enviar su petición, por favor, vuelva a intentarlo de nuevo");
							window.location.href="index.html";</script>';
					}


?>