<?php 
/*
 * LOAD MORE AJAX
 * @LaCueva.tv
 * Since 1.1
 * Carga más post
*/
require_once('../functions.php');
//require_once('../modulos/modulo-acciones.php');
load_module( 'sucursales' );
if ( isAjax() ) {
    
    $pageActual = isset( $_POST['page'] ) ? intval( $_POST['page'] ) : 2;
    $categoria = isset( $_POST['categoria'] ) ? $_POST['categoria'] : '';
    $postType = isset( $_POST['post_type'] ) ? $_POST['post_type'] : 'post';

    $limit = ( ($pageActual )*POSTPERPAG).", ".POSTPERPAG;

    $sucursales = getSucursales( $limit );

        
    if ( $sucursales != null ) {
        for ($i=0; $i < count($sucursales); $i++) { 
            getTemplate( 'loop-sucursales', $sucursales[$i] );    
            
        }
    } 

    //para ver cuantas son:
    $totales = getSucursales();
    $cantTotal = count($totales);
    $cargadasenQuery = count($sucursales);
    //echo $cargadasenQuery . ' noticias cargadas. '.$cantTotal.' noticias en total' ;
    $restantes = $cantTotal-(POSTPERPAG*($pageActual));
    $texto1 = $cantTotal.' acciones en total. '.$cargadasenQuery. ' cargados ahora. '.$restantes.' restantes.';
    $texto2 = $cantTotal.' acciones en total. '.$cargadasenQuery. ' cargados ahora. 0 restantes.';
    //2 opciones: si queda más muestra cuantas quedan sino indica que no hay más
    if ( intval($restantes) > 0 ) {
        echo '<p class="info-resumen">'.$texto1.'</p>';
    } else {
        echo '<p class="info-resumen">'.$texto2.'</p>';
    }
    //echo $restantes .' - '.$cantTotal.' - '.$cargadasenQuery;

//cierre base de datos
mysqli_close($connection);


} //if not ajax
else {
	exit;
}