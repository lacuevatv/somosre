<?php
/*
 * editor
 * Since 3.0
 * Maneja el backend del editor de noticias, ya sea para una nueva noticia o editar alguna
*/
session_start();
require_once('../functions.php');
if ( isAjax() ) {
    
    //se toman los datos para variables
	$connection          = connectDB();
	$tabla               = 'sucursales';
	$user                = $_SESSION['user_id'];
	$postID              = isset( $_POST['sucursal_id'] ) ? $_POST['sucursal_id'] : 'new';
    $postTitulo          = isset( $_POST['post_title'] ) ? $_POST['post_title'] : '';
    $postEmail           = isset( $_POST['post_email'] ) ? $_POST['post_email'] : '';
    $postContenido       = isset( $_POST['post_contenido'] ) ? $_POST['post_contenido'] : '';
    $postRedes           = isset( $_POST['post_redes'] ) ? $_POST['post_redes'] : '';
    $orden               = isset( $_POST['post_orden'] ) ? $_POST['post_orden'] : '0';
    $direccion           = isset( $_POST['input_direccion'] ) ? $_POST['input_direccion'] : '';
    $latitud             = isset( $_POST['post_lat'] ) ? $_POST['post_lat'] : '';
    $longitud            = isset( $_POST['post_longitud'] ) ? $_POST['post_longitud'] : '';
    $mapa                = isset( $_POST['post_mapa'] ) ? $_POST['post_mapa'] : '';
    
    //saneamiento
	$postTitulo          = mysqli_real_escape_string($connection, $postTitulo);
    $direccion           = filter_var($direccion,FILTER_SANITIZE_STRING);
    $latitud             = filter_var($latitud,FILTER_SANITIZE_STRING);
    $longitud            = filter_var($longitud,FILTER_SANITIZE_STRING);


    /*
     * MAPA
    */

    //Si longitud o latitus no estan registradas el mapa no puede existir
    if ( $latitud == '' || $longitud == '' ) {
        $mapa = '';
    } else {
        //si hay, se crear la imagen estática y se guarda

        $src = 'https://maps.googleapis.com/maps/api/staticmap?center='.$latitud.','.$longitud.'&zoom=15&size=350x150&maptype=roadmap&markers=color:red%7Clabel:Re%7C'.$latitud.','.$longitud.'&key=' . GOOGLE_API_KEY;
        $time = time();
        $imageName = 'google-map_'.$time.'.png';
        $imagePath = UPLOADSIMAGES . '/' .$imageName;
        file_put_contents($imagePath,file_get_contents($src));

        $mapa = $imageName;
    }


/*
* GUARDAR POST
*/

    //es nuevo post
    
	if ($postID == 'new') {

        $query = "INSERT INTO $tabla (sucursal_titulo,sucursal_texto,sucursal_email,sucursal_redes,sucursal_lat,sucursal_long,sucursal_mapa,sucursal_orden) VALUES ('$postTitulo', '$postContenido', '$postEmail', '$postRedes', '$latitud', '$longitud', '$mapa', '$orden')";

        $nuevoPost = mysqli_query($connection, $query); 
        
        if ($nuevoPost) {
            $postID = mysqli_insert_id($connection);
            echo $postID;
        } else  {
            echo 'error';
            //print_r($connection);
        }

	} //es viejo post
		else {

        $query = "UPDATE ".$tabla." SET sucursal_titulo='".$postTitulo."', sucursal_texto='".$postContenido."',sucursal_email='".$postEmail."',sucursal_redes='".$postRedes."',sucursal_lat='".$latitud."',sucursal_long='".$longitud."',sucursal_mapa='".$mapa."',sucursal_orden='".$orden."' WHERE sucursal_id='".$postID."' LIMIT 1";

		$updatePost = mysqli_query($connection, $query); 
		if ($updatePost) {
            echo 'updated';
        } else {
            echo 'error';
           
        }	
	}

    //cierre base de datos
    mysqli_close($connection);

} //if not ajax
else {
	exit;
}