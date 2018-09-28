<?php
/*
 * delete post
 * Since 3.0
 * borra el post seleccionado de acuerdo a su url
*/
require_once('../functions.php');
if ( isAjax() ) {

$connection     = connectDB();
$tablaNoticias  = 'sucursales';
$postid         = isset( $_POST['post_id'] ) ? $_POST['post_id'] : 'none';



//borramos el post
$query      = "DELETE FROM ".$tablaNoticias." WHERE sucursal_id= '".$postid."'";
$result     = mysqli_query($connection, $query);
   
   if ($result) {
		echo 'deleted';
   } else {
   		echo 'error-deleted-post';
   }


//cierre base de datos
mysqli_close($connection);


} //if not ajax
else {
	exit;
}