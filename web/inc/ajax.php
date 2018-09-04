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
			print_r($_POST);
			//FUNCION QUE ENVIA FORMULARIO CON PHPMAILER			
			//sendEmailPhpMailer( $emailReplyTo, $nombreReplyTo, $emailTo, $nombreTo, $asunto, $contenido);

			//guardar en base de datos
			//saveNewContact ( $nombre, $telefono, $email, $mensaje, $fecha_viaje, 'contacto' );
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