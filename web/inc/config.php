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
define('ACCESOAGENCIAS', 'https://app.redevt.com/red/ag/login.asp?xpid=6C672D35353130335548');
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
define ( 'EMAILDEFAULT', 'info@lacueva.tv' );
define ( 'ASUNTODEFAULT', 'Nuevo formulario' );
define('MENSAJEEXITO', 'Su email fue enviado con éxito, muchas gracias.');//este mensaje se imprime en el html
define('MENSAJEERROR', 'Hubo un pequeño error, intente otra vez.');

global $provincias;
$provincias = array(
    array( 'slug' => 'caba', 'nombre' => 'Ciudad de Buenos Aires' ),
    array( 'slug' => 'buenos-aires', 'nombre' => 'Buenos Aires' ),
    array( 'slug' => 'catamarca', 'nombre' => 'Catamarca' ),
    array( 'slug' => 'chaco', 'nombre' => 'Chaco' ),
    array( 'slug' => 'chubut', 'nombre' => 'Chubut' ),
    array( 'slug' => 'cordoba', 'nombre' => 'Córdoba' ),
    array( 'slug' => 'corrientes', 'nombre' => 'Corrientes' ),
    array( 'slug' => 'entre-rios', 'nombre' => 'Entre Ríos' ),
    array( 'slug' => 'formosa', 'nombre' => 'Formosa' ),
    array( 'slug' => 'jujuy', 'nombre' => 'Jujuy' ),
    array( 'slug' => 'la-pampa', 'nombre' => 'La Pampa' ),
    array( 'slug' => 'la-rioja', 'nombre' => 'La Rioja' ),
    array( 'slug' => 'mendoza', 'nombre' => 'Mendoza' ),
    array( 'slug' => 'misiones', 'nombre' => 'Misiones' ),
    array( 'slug' => 'neuquen', 'nombre' => 'Neuquén' ),
    array( 'slug' => 'rio-negro', 'nombre' => 'Río Negro' ),
    array( 'slug' => 'salta', 'nombre' => 'Salta' ),
    array( 'slug' => 'san-juan', 'nombre' => 'San Juan' ),
    array( 'slug' => 'san-luis', 'nombre' => 'San Luis' ),
    array( 'slug' => 'santa-cruz', 'nombre' => 'Santa Cruz' ),
    array( 'slug' => 'santa-fe', 'nombre' => 'Santa Fe' ),
    array( 'slug' => 'santiago-del-estero', 'nombre' => 'Santiago del Estero' ),
    array( 'slug' => 'tierra-del-fuego', 'nombre' => 'Tierra del Fuego' ),
    array( 'slug' => 'tucuman', 'nombre' => 'Tucumán' ),
);

//menues:
global $menus;
$menus = array(
    //menu header
    'menuHeader' => array(
        array(
            'slug' => 'somosre',
            'nombre' => 'Sobre Nosotros',
            'link_externo' => false,
        ),
        array(
            'slug' => 'programas',
            'nombre' => 'Programas',
            'link_externo' => false,
        ),
        array(
            'slug' => 'boxes',
            'nombre' => 'Exclusivo by Re',
            'link_externo' => false,
        ),
        array(
            'slug' => 'entrevista',
            'nombre' => 'Contacto',
            'link_externo' => false,
        ),
        array(
            'slug' => 'agencias',
            'nombre' => 'Puntos de ventas',
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