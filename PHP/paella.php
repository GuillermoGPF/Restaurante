

<?php

				error_reporting(E_ERROR | E_WARNING | E_PARSE);
			

					$nombre = $_POST['nombre'];
					$telefono = $_POST['telefono'];
					$observaciones = $_POST['observ'];
					$paella = $_POST['añadir-paella'];
					$tortilla = $_POST['añadir-tortilla'];
					$burguer = $_POST['añadir-burguer'];
					$croqueta = $_POST['añadir-croqueta'];


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
									-Observaciones: </b> '.$observaciones.'</p>

									<p><b style="color:#7ecc3f; margin-left: 5px;">
									-Cantidad de paella: </b> '.$añadir.'</p>

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