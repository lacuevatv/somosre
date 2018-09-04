<?php
/*
 * @LaCueva.tv
 * INDEX: ROUTEADOR
 *
*/
//functions incluye config, por lo tanto no es necesario llamarlo
require_once 'inc/functions.php';

//define la pageactual que se usa en toda la navegación
define('PAGEACTUAL', pageActual( cleanUri() ) );

switch ( PAGEACTUAL ) {    
    default:
        getPage( PAGEACTUAL );
    break;
}