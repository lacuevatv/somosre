<?php
/*
 * lista de post
*/

function getSucursales( $limit = '' ) {
	$connection = connectDB();
	$tabla = 'sucursales';

	//queries según parámetros
    $query = "SELECT * FROM ".$tabla." ORDER by sucursal_orden ASC";   

    //limite
    if ($limit != '') {
        $query  .= " LIMIT ".$limit;
    }
	
	$result = mysqli_query($connection, $query);
	
	if ( $result->num_rows == 0 ) {
		return null;
	} else {

		while ( $row = $result->fetch_array() ) {
			$sucursales[] = $row;
        }

        return $sucursales;
    }
}

//recupera post, por el slug
function getSucursalById( $id ) {
	$connection = connectDB();
	$tabla = 'sucursales';

	//queries según parámetros
	$query  = "SELECT * FROM " .$tabla. " WHERE sucursal_id='".$id."'";
	
	$result = mysqli_query($connection, $query);
	$sucursal = $result->fetch_array();
	
	return $sucursal;
}
