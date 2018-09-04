<?php
require '../functions.php';

if ( isAjax() ) {

    $connection     = connectDB();
    $id = $_POST['id'];
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';

    $query = "UPDATE categorias SET categoria_nombre = '".$nombre."' WHERE categoria_id= '".$id."'";
    
    $result = mysqli_query($connection, $query); 
        if ($result) {
            echo 'Guardado';
        } else {
            echo 'error';
        }
	//cierre base de datos
    mysqli_close($connection);

} else {
	exit;
}//else - fin script