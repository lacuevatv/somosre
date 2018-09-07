<?php
/*
 * CONFIG
 * 
*/
//BD
define('DB_SERVER', 'localhost');
define('DB_USER', 'dbuser');
define('DB_PASS', '123');
define('DB_NAME', 'somosre_bd');
define('GOOGLE_API_KEY', 'AIzaSyCvMf7H09aAIEg11DTNnBx9vfOAEkN1EKU');
//DEFINICIONES HEAD Y SCRIPTS
define ( 'VERSION', '1.0' );

//CARPETAS
define ( 'UPLOADS', dirname( __FILE__ ) . '/../contenido' );
define ( 'PAGESDIR', dirname( __FILE__ ) . '/../pages' );
define ( 'TEMPLATEDIR', dirname( __FILE__ ) . '/../templates' );

//urls
define ('CARPETASERVIDOR', '' );//esta variable se define si el sitio no está en el root del dominio y si está en una subcarpeta
define ('MAINSURL', 'http://' . $_SERVER['HTTP_HOST'] . CARPETASERVIDOR );
define ('UPLOADSURL', MAINSURL . '/contenido');
define ('UPLOADSFILE', MAINSURL . '/contenido');

//META TAGS
define('SITETITLE', 'Titulo del sitio');
define('METADESCRIPTION', '');
define('METAKEYS', '');

//LINKS REDES SOCIALES:
define('LINK_FACEBOOK', 'https://www.facebook.com/');
define('LINK_INSTAGRAM', 'https://www.instagram.com/');
define('LINK_TWITTER', 'https://twitter.com/');
define('LINK_FLICKR', '#');
define('LINK_YOUTUBE', 'https://www.youtube.com/channel/');

//indica al paginador cuantos se muestran por pagina para calcular el offset además de que el loop muestra solo esos
define('POSTPERPAG', '1');

//EMAILS Y MENSAJES
define ( 'EMAILDEFAULT', '' );
define ( 'ASUNTODEFAULT', 'Muchas gracias por contestarnos' );
define('MENSAJEEXITO', 'Su email fue enviado con éxito, muchas gracias.');//este mensaje se imprime en el html
define('MENSAJEERROR', 'Hubo un pequeño error, intente otra vez.');
