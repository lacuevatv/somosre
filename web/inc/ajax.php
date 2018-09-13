<?php 
/*
 * AJAX FUNCTIONS
 * Funciones que se ejecutan por ajax
 * 
*/
require_once 'functions.php';

//chequea si es peticion de ajax y ejecuta la funcion
if( isAjax() ) :

	$function = isset($_POST['function']) ? $_POST['function'] : '';

	switch ( $function ) {
		case 'formulario-default':
			
			// Valores enviados desde el formulario
			//print_r($_POST);

			$form_type = 'contacto';
			$nombre = isset($_POST['contacto_nombre']) ? $_POST['contacto_nombre'] : '';
			$telefono = isset($_POST['contacto_telefono']) ? $_POST['contacto_telefono'] : '';
			$celular = isset($_POST['contacto_celular']) ? $_POST['contacto_celular'] : '';
			$email = isset($_POST['contacto_email']) ? $_POST['contacto_email'] : '';
			$mensaje = isset($_POST['contacto_mensaje']) ? $_POST['contacto_mensaje'] : '';
			$colegio = isset($_POST['contacto_colegio']) ? $_POST['contacto_colegio'] : '';
			$provincia = isset($_POST['contacto_provincia']) ? $_POST['contacto_provincia'] : '';
			$ciudad = isset($_POST['contacto_ciudad']) ? $_POST['contacto_ciudad'] : '';
			$nacimiento = isset($_POST['contacto_nacimiento']) ? $_POST['contacto_nacimiento'] : '';
			$comoLlegaste = isset($_POST['contacto_como_llegaste']) ? $_POST['contacto_como_llegaste'] : '';
			$adultoNombre = isset($_POST['contacto_adulto_nombre']) ? $_POST['contacto_adulto_nombre'] : '';
			$adultoEmail = isset($_POST['contacto_adulto_email']) ? $_POST['contacto_adulto_email'] : '';
			$adultoTelefono = isset($_POST['contacto_adulto_telefono']) ? $_POST['contacto_adulto_telefono'] : '';
			$adultoHorarios = isset($_POST['contacto_adulto_horario']) ? $_POST['contacto_adulto_horario'] : '';

			$telefono = filter_var($telefono,FILTER_SANITIZE_NUMBER_INT);
			$celular = filter_var($celular,FILTER_SANITIZE_NUMBER_INT);
			$adultoTelefono = filter_var($adultoTelefono,FILTER_SANITIZE_NUMBER_INT);
			$email = filter_var($email,FILTER_SANITIZE_EMAIL);
			$adultoEmail = filter_var($adultoEmail,FILTER_SANITIZE_EMAIL);
			$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
			$colegio = filter_var($colegio,FILTER_SANITIZE_STRING);
			$ciudad = filter_var($ciudad,FILTER_SANITIZE_STRING);
			$adultoNombre = filter_var($adultoNombre,FILTER_SANITIZE_STRING);
			$adultoHorarios = filter_var($adultoHorarios,FILTER_SANITIZE_STRING);
			
			//sanitiza la provincia y pone el nombre correcto
			global $provincias;
			foreach ($provincias as $pcia ) {
				if ($pcia['slug'] == $provincia) {
					$provincia = $pcia['nombre'];
					break;
				}
			}

			//FUNCION QUE ENVIA FORMULARIO CON PHPMAILER
			$contenido = '<h2>Datos del mensaje</h2>';

			$contenido .= '<p>';
			$contenido .= 'Nombre: ' . $nombre . '<br>';
			$contenido .= 'Teléfono: ' . $telefono . '<br>';
			$contenido .= 'Celular: ' . $celular . '<br>';
			$contenido .= 'Email: ' . $email . '<br>';
			$contenido .= 'Colegio: ' . $colegio . '<br>';
			$contenido .= 'Provincia: ' . $provincia . '<br>';
			$contenido .= 'Ciudad: ' . $ciudad . '<br>';
			$contenido .= 'Fecha de Nacimiento: ' . $nacimiento . '<br>';
			$contenido .= 'Como llegaste a nosotros: ' . $comoLlegaste . '<br>';
			$contenido .= 'Adulto Nombre: ' . $adultoNombre . '<br>';
			$contenido .= 'Adulto Email: ' . $adultoEmail . '<br>';
			$contenido .= 'Adulto Teléfono: ' . $adultoTelefono . '<br>';
			$contenido .= 'Adulto Horarios: ' . $adultoHorarios . '<br>';
			$contenido .= '</p>';
			
			//envia formulario
			$respuesta['email'] = sendEmailPhpMailer( $email, $nombre, EMAILDEFAULT, SITETITLE, ASUNTODEFAULT, $contenido);

			//guarda en base de datos
			$respuesta['bd'] = saveNewContact ( $form_type, $email, $nombre, $telefono, $celular, $mensaje, $colegio, $provincia, $ciudad, $nacimiento, $comoLlegaste, $adultoNombre, $adultoEmail, $adultoTelefono, $adultoHorarios);

			echo json_encode($respuesta);

		break;

		case 'newsletter-form':
			//print_r($_POST);
			$form_type = 'newsletter';
			$email = isset($_POST['contacto_email']) ? $_POST['contacto_email'] : '';

			if ($email == '' ) {
				$respuesta['email'] = 'Falta escribir un email';
				$respuesta['bd'] = null;
				echo json_encode($respuesta);
				return ;
			}

			//FUNCION QUE ENVIA FORMULARIO CON PHPMAILER
			$contenido = 'Nuevo pedido de suscripción en la página web de ' . $email;

			$respuesta['email'] = sendEmailPhpMailer( $email, 'Suscriptor Newsletter', EMAILDEFAULT, SITETITLE, 'Nuevo suscriptor', $contenido);

			//guardar en base de datos
			$respuesta['bd'] = saveNewContact ( $form_type, $email );

			echo json_encode($respuesta);

		break;


		case 'load-more':

			$page  = isset($_POST['page']) ? $_POST['page'] : 1;
			$postPerPage  = POSTPERPAG;
			$categoria  = isset($_POST['categoria']) ? $_POST['categoria'] : '';
			
			$postPerPage = ($page) * POSTPERPAG .',' .POSTPERPAG;

			$posts = getPosts( $categoria, $postPerPage );

			if ( $posts != null ) : 
				ob_start();
				foreach ($posts as $post ) {
					
					getTemplate('posts-loops', $post);
				
				}

				$loop = ob_get_contents();
				ob_end_clean();
				
			echo $posts;
			
			endif;

		break;

	}

	
//sino es peticion ajax se cancela
else :
    throw new Exception("Error Processing Request", 1);   
endif;