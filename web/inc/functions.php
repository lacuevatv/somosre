<?php 
/*
 * FUNCTIONS
 * funciones con y sin base de datos
 * 
*/

require_once 'config.php';
require_once 'lib/mobile-detect/Mobile_Detect.php';

//busca la página $name = nombre del archivo sin extensión
function getPage( $name ) {
	$error = '404';
	$namePage = PAGESDIR . '/'. $name. '.php';

	if (is_file($namePage)) {
		include $namePage;
	} else {
		include PAGESDIR . '/'. $error. '.php';		
	}
}

//busca el template $name = nombre del archivo sin extensión
function getTemplate ( $name, $data = array() ) {
	$namePage = TEMPLATEDIR . '/'. $name. '.php';

	if (is_file($namePage)) {
		include $namePage;
	}
}



//detecta el dispositivo
function dispositivo () {
	$dispositivo = 'pc';
	$detect = new Mobile_Detect;

	if ( $detect->isMobile() ) {
		$dispositivo = 'movil';
	}
		
	// Any tablet device.
	if( $detect->isTablet() ){
		$dispositivo = 'tablet';
	}

	return $dispositivo;

}

//esta función limpia el url si el sitio no está instalado en la rais del servidor para que funcionen los permalinks sin problemas
function cleanUri() {
	$uri = $_SERVER["REQUEST_URI"];
	$uri = str_replace(CARPETASERVIDOR, '', $uri);
	return $uri;	
}

/*
* FUNCIÓN DE PERMALINKS
 * Define la page actual y redirecciona segun url, devuelve el slug o template part.
 * a) En el caso de que sean paginas, busca el template en la carpeta templates y listo.
 * b) En el caso de que sea noticia, categoria o curso, busca el template adecuado (cursos = curso.php / o en en el archivo index elige la primera opcion (la segunda es de paginas).
 * Pero ademas, e importante, busca en la base de datos mediante el slug. Si es noticia hace un loop de la categoria elegida o de todas las noticias y si es noticia single busca la noticia específica.
 *
*/
function pageActual ( $uri ) {
	$slug = 'inicio'; //slug por defecto
	
	//borramos la barra / luego del dominio:
	$url = $uri;
	$parseUrl = explode('/', $url);
	$RequestURI = $parseUrl[1];
	
		//si no está vacío, hay que procesar cual es
	if ( $url != '/' ) {

		$slug = $RequestURI;		
		
	}

	return $slug;

}//pageActual()

/*
ESTA FUNCIÓN TOMA LA VARIANTE DE ALGUNAS PAGINAS POR EJEMPLO NOTICIAS, EL SLUG ES UNA CATEGORIA O EL URL DE UNA NOTICIA
@return: string
* la url de esta pagina al separar por "/" puede tener hasta cuatro indices: 0) "" 1) row 2) categoria 3) slug o url del post o page y 4) ""
1. lo primero que hace la función es chequear si el uri (en caso de ser unico indice) es categoria o row y sino lo es rescata ese slug.
2. si es categoria o row, chequea porque debería haber más indices. Si hay un 3 indice es una pagina o un post 
3. Y si no hay un tercero va por el segundo indice que sería la categoria para hacer el loop
*/
function getPageVar ( $uri ) {
	$slug = '';

	//parsear el url para buscar informacion
	$parseUrl = explode('/', $uri);
	
	//si el primer indice es categoria o es row
	if ( es_categoria( $uri ) || es_row( $parseUrl[1] ) ){
		//sebusca a ver si hay un indice 3 y este no es la "/" entonces hay info que rescatar
		if ( isset($parseUrl[3]) && $parseUrl[3] != '' ) {
			
			$slug = $parseUrl[3];
		
		} else {
			//si nohay indice 3 o es la "/" se busca a ver si hay un indice 2 y este no es la "/" entonces hay info que rescatar
		
			if ( isset($parseUrl[2]) && $parseUrl[2] != '' ) {
				$slug = $parseUrl[2];
			} else {
				//si no hay indice 2 o el indice 2 es "/" entonces se vuelve
				return;
			}
		}
		
	} else {
		//si el indice 1 no es una categoria y no es un row, entonces es esa la info a rescatar
		$slug = $parseUrl[1];
	}

	return $slug;

}

//acorta el texto
function acortaTexto( $texto, $cantPalabras = 50, $final = null ) {
	if ( null === $final ) {
	$final = '&hellip;';
	}	
	$textoOriginal = $texto;
	
	//quitar html
	$texto = preg_replace( '@<(script|style)[^>]*?>.*?</\\1>@si', '', $texto );
	$texto = strip_tags($texto);
	
	//reducir texto y agregar el final
	 $words_array = preg_split( "/[\n\r\t ]+/", $texto, $cantPalabras + 1, PREG_SPLIT_NO_EMPTY );
	$sep = ' ';
	
	//devolver texto reducido
	if ( count( $words_array ) > $cantPalabras ) {
		array_pop( $words_array );
		$texto = implode( $sep, $words_array );
		$texto = $texto . $final;
	} else {
		$texto = implode( $sep, $words_array );
	}
	return $texto;
}

//devuelve el título de la página para <head><title>
function SeoTitlePage ( $page ) {
    $titulo = SITETITLE;

    
    echo '<title>'.$titulo . '</title>';
} //SeoTitlePage()


//define el metadescription en la etiqueta Head para SEO
function getHeaderMetaInfo ( $pageActual ) {
	$description = METADESCRIPTION;
	$keys = METAKEYS;
	?>

	<meta name="keywords" content="<?php echo $keys; ?>">
	<meta name="description" content="<?php echo $description; ?>">
<?php
	
}//metaDescriptionText()


function getStyles( $pageActual, $options = array('default', 'owlcarousel') ) {

	if ( ! empty($options) ) {
		if (in_array('owlcarousel', $options)) { ?>
			<link rel="stylesheet" type="text/css" href="<?php echo MAINSURL; ?>/assets/css/owl-styles/owl.carousel.min.css">
		<?php }

		if (in_array('default', $options)) { ?>
			<!--MAINS CSS-->
			<link rel="stylesheet" type="text/css" href="<?php echo MAINSURL; ?>/assets/css/style.css?<?php echo VERSION; ?>">
		<?php }
	}
}


/**
 * Checks if a request is a AJAX request
 * @return bool
 */
function isAjax() {
    return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']  == 'XMLHttpRequest');
}


/*
 *
 * FUNCIONES CON BASE DE DATOS
 *
*/

function connectDB () {
	global $connection;
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if( mysqli_connect_errno() ) {
    die("Database connection failed: " . mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }

  if (!mysqli_set_charset($connection, "utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($connection));
    exit();
	} else {
		mysqli_character_set_name($connection);
	}
  return $connection;
}

//cierre base de datos
function closeDataBase( $connection ){
	if ( isset($connection) ) {
    	mysqli_close( $connection );
    }
}



//busca datos para loop de noticias por categoria y los devuelve en una variables:
function getPosts( $categoria = '', $number = -1, $exclude = 'none', $status = 'publicado', $offset = 0 ) {
	$connection = connectDB();
	$fecha_actual = date("Y-m-d");
	$tabla = 'posts';

	if ( $offset != '0' ) {
		$number = $offset.','.$number;
	}

	$query  = "SELECT * FROM " .$tabla;
	$query .= " WHERE post_status='";
	$query .= $status . "'";
	if ( $categoria != '' ) {
		$query .= " AND post_categoria = '".$categoria."'";
	}
	if ( $exclude != '' ) {
		$query .= " AND post_url!='".$exclude."'";
	}
	if ( $status == 'publicado' ) {
		$query .= " AND post_fecha <= '".$fecha_actual."'";	
	}
	$query .= " ORDER by post_orden asc, post_fecha desc ";
	if ( $number != -1 ) {
		$query .= " LIMIT ".$number." ";
	}
	
	$result = mysqli_query($connection, $query);
	
	if ( $result->num_rows == 0 ) {
		$loop = null;
	} else {

		while ($row = $result->fetch_array()) {
				$loop[] = $row;
			}

	}

	closeDataBase( $connection );
	return $loop;
}


//busca la noticia en particular y recoge los datos para pasar al template
function singlePostData ( $postSlug ) {
	$connection = connectDB();
	$tabla = 'posts';

	$query  = "SELECT * FROM " .$tabla. " WHERE post_url='".$postSlug."' LIMIT 1 ";
	$result = mysqli_query($connection, $query);

	

	if ( $result->num_rows == 0 ) {
		$singlePost = null;
	} else {

		$singlePost = mysqli_fetch_array($result);

	}

	closeDataBase( $connection );

	return $singlePost;

}

//busca el slider en base de datos de acuerdo a su 'ubicacion' pasada
function getSliders( $slider ) {

	$connection = connectDB();
	$tabla = 'sliders';
	$query  = "SELECT * FROM " .$tabla. " WHERE slider_ubicacion='".$slider."' ORDER by slider_orden asc";
		
	$result = mysqli_query($connection, $query);
	
	if ( $result->num_rows == 0 ) {
		return null;
	} else {

		while ( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
			$dataSlider[] = $row;
		}
		
		return $dataSlider;

	}//else
	closeDataBase( $connection );
} //getSliders()


function openPopUp ( $page ) {
	
	if ( $page == 'inicio' ) {

		$connection = connectDB();
		$tabla = 'options';
		$option_name = 'popupValue';
		$query  = "SELECT * FROM " .$tabla. " WHERE options_name = '{$option_name}' LIMIT 1";
		$result =  mysqli_query($connection, $query);
		
		
		if ($result->num_rows == 0) {
			return;
		}
		
		$data = mysqli_fetch_array($result);
		
		if ($data[2] == '1') {
			getTemplate( 'popup' );
		} else {
			return;
		}
	}
}//funcion openPopUp

function showPopupImg () {
	
	$connection = connectDB();
	$tabla = 'medios';
	$post_type = 'promo';
	$query  = 'SELECT * FROM ' .$tabla. ' WHERE medio_post_type = "'.$post_type.'" order by medio_id desc LIMIT 1';

	$result =  mysqli_query($connection, $query);
	$data = mysqli_fetch_array($result);
	$urlPoup = $data[3];
	
	mysqli_close($connection);
	if ( $urlPoup == NULL ) {
		echo MAINSURL . '/assets/images/popupdefault.png';
	} else {
		echo UPLOADSURL . '/' . $urlPoup;
	}
}

//busca el url si existe
function getUrlPromo() {
	$connection = connectDB();
	$tabla = 'options';
	$option_name = 'urlPopup';

	$query  = "SELECT * FROM " .$tabla. " WHERE options_name = '{$option_name}' LIMIT 1";
	$result =  mysqli_query($connection, $query);
	
	closeDataBase($connection);

	if ($result->num_rows == 0) {
		return '#';
	}
	
	$data = mysqli_fetch_array($result);
	
	if ($data[2] == '') {
		return '#';
	} else {
		return $data[2];
	}

	closeDataBase($connection);
}


//envia emails con phpmailer, esta función envia todos los emails, y está separada para poder configurar el smtp y las claves solo una sola vez
function sendEmailPhpMailer( $emailReplyTo, $nombreReplyTo, $emailTo, $nombreTo, $asunto, $contenido) {
	require_once("class.phpmailer.php");
	require_once("class.smtp.php");

	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->Username = 'coco.kmkz@gmail.com';
	$mail->Password = 'EmiliaIsabela';
	$mail->SMTPAuth = true;

	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 0;
	$mail->CharSet = 'UTF-8';
	//Set who the message is to be sent from
	//$mail->setFrom(EMAILDEFAULT, SITETITLE);
	$mail->setFrom('coco.kmkz@gmail.com', SITETITLE);
	//Set an alternative reply-to address
	$mail->addReplyTo($emailReplyTo, $nombreReplyTo);
	//Set who the message is to be sent to
	$mail->addAddress($emailTo, $nombreTo);
	//Set the subject line
	$mail->Subject = $asunto;
	$mail->IsHTML(true);
	//Read an HTML message body from an external file, convert referenced images to embedded,
	$mail->MsgHTML($contenido);
	$mail->AltBody = $contenido;
	//send the message, check for errors
	
	if (!$mail->send()) {
		$error = ' - '. $mail->ErrorInfo;
		return $error;
		
	} else {
		return 'ok';
	}
}

function saveNewContact ( $nombre = '', $telefono = '', $email = '', $mensaje = '', $escuela = '', $cargo = '', $fecha_viaje = '', $cant_alumnos = '', $form_type = 'contacto') {
	$connection = connectDB();
	$tabla      = 'contacto';
		
	$queryCreate  = "INSERT INTO " .$tabla. " (nombre,telefono,email,mensaje,escuela,cargo,fecha_viaje,cant_alumnos,form_type) VALUES ('".$nombre."','".$telefono."','".$email."','".$mensaje."','".$escuela."','".$cargo."','".$fecha_viaje."','".$cant_alumnos."','".$form_type."')";
	$result = mysqli_query($connection, $queryCreate);
	
	echo mysqli_insert_id($connection);
	//cierre base de datos
	mysqli_close($connection);
}