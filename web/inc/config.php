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
define('SITETITLE', 'Somos Re');
define('METADESCRIPTION', 'Es el nombre de una comunidad cancherísima de Girls Teens, te proponemos un viaje diferente para festejar tus quince, vas a conocer mucho más que solo Disney.');
define('METAKEYS', 'festejar tus quince, usa, Girls Teens, viaje diferente, viaje a estados unidos,');

//LINKS REDES SOCIALES:
define('LINK_FACEBOOK', 'https://www.facebook.com/');
define('USUARIO_INSTAGRAM', 'SomosRe');
define('LINK_INSTAGRAM', 'https://www.instagram.com/'.USUARIO_INSTAGRAM);
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

global $provincias;
$provincias = array(
    array( 'caba' => '', 'nombre' => 'Ciudad de Buenos Aires' ),
    array( 'buenos-aires' => '', 'nombre' => 'Buenos Aires' ),
    array( 'catamarca' => '', 'nombre' => 'Catamarca' ),
    array( 'chaco' => '', 'nombre' => 'Chaco' ),
    array( 'chubut' => '', 'nombre' => 'Chubut' ),
    array( 'cordoba' => '', 'nombre' => 'Córdoba' ),
    array( 'corrientes' => '', 'nombre' => 'Corrientes' ),
    array( 'entre-rios' => '', 'nombre' => 'Entre Ríos' ),
    array( 'formosa' => '', 'nombre' => 'Formosa' ),
    array( 'jujuy' => '', 'nombre' => 'Jujuy' ),
    array( 'la-pampa' => '', 'nombre' => 'La Pampa' ),
    array( 'la-rioja' => '', 'nombre' => 'La Rioja' ),
    array( 'mendoza' => '', 'nombre' => 'Mendoza' ),
    array( 'misiones' => '', 'nombre' => 'Misiones' ),
    array( 'neuquen' => '', 'nombre' => 'Neuquén' ),
    array( 'rio-negro' => '', 'nombre' => 'Río Negro' ),
    array( 'salta' => '', 'nombre' => 'Salta' ),
    array( 'san-juan' => '', 'nombre' => 'San Juan' ),
    array( 'san-luis' => '', 'nombre' => 'San Luis' ),
    array( 'stanta-cruz' => '', 'nombre' => 'Santa Cruz' ),
    array( 'santa-fe' => '', 'nombre' => 'Santa Fe' ),
    array( 'santiago-del-estero' => '', 'nombre' => 'Santiago del Estero' ),
    array( 'tierra-del-fuego' => '', 'nombre' => 'Tierra del Fuego' ),
    array( 'tucuman' => '', 'nombre' => 'Tucumán' ),
);

//menues:
global $menus;
$menus = array(
    //menu header
    'menuHeader' => array(
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Sobre Re',
            'link_externo' => false,
        ),
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Programas',
            'link_externo' => false,
        ),
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Bonus Track',
            'link_externo' => false,
        ),
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Entrevista',
            'link_externo' => false,
        ),
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Info Útil',
            'link_externo' => false,
        ),
    ),

    //menu footer 1
    'menuFooter1' => array(
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Sobre Re',
            'link_externo' => false,
        ),
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Programas Exclusivos',
            'link_externo' => false,
        ),
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Experiencia Re.',
            'link_externo' => false,
        ),
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Re by Celebrities',
            'link_externo' => false,
        ),
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Bonus Track',
            'link_externo' => false,
        ),
    ),

    //menu footer 2
    'menuFooter2' => array(
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Fiesta de 15',
            'link_externo' => false,
        ),
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Seguridad',
            'link_externo' => false,
        ),
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Testimonios',
            'link_externo' => false,
        ),
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Agencias Autorizadas',
            'link_externo' => false,
        ),
        array(
            'slug' => MAINSURL . '/' . '#',
            'nombre' => 'Tu Entrevista',
            'link_externo' => false,
        ),
    ),
);