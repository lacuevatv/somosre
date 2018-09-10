<?php
// BASE DE DATOS
define('DB_SERVER', 'localhost');
define('DB_USER', 'dbuser');
define('DB_PASS', '123');
define('DB_NAME', 'somosre_bd');
define('GOOGLE_API_KEY', 'AIzaSyCvMf7H09aAIEg11DTNnBx9vfOAEkN1EKU');
//define('GOOGLE_API_KEY', '');
//CARPETAS
define ( 'TEMPLATEDIR', dirname( __FILE__ ) . '/../templates' );
define ( 'MODULOSDIR', dirname( __FILE__ ) . '/modulos' );
define ( 'UPLOADS', dirname( __FILE__ ) . '/../../contenido' );
define ( 'UPLOADSIMAGES', UPLOADS . '' );
define ( 'UPLOADSFILES', UPLOADS . '' );
//URL
define ('CARPETASERVIDOR', '' );//esta variable se define si el sitio no está en el root del dominio y si está en una subcarpeta
define ('MAINURL', 'http://' . $_SERVER['HTTP_HOST'] . CARPETASERVIDOR );
define ('URLADMINISTRADOR', MAINURL . '/administrador' );//esta variable define la carpeta del administrador - también debe cambianser en el .js
define ('UPLOADSURL', MAINURL . '/contenido');//carpeta donde esta el contenido subido por el usuario
define ('UPLOADSURLIMAGES', UPLOADSURL . '');//carpeta  de imagenes (por si tiene distintas carpetas de contenido)
define ('UPLOADSURLFILES', UPLOADSURL . '');//carpeta de archivos (por si tiene distintas carpetas de contenido)

//DEFINICIONES HEAD Y SCRIPTS
define ( 'SITENAME', 'Somos Re' );
define ( 'DATEPUBLISHED', '2018');
define ('LOGOSITE' , URLADMINISTRADOR . '/assets/images/logosite.png');
define ( 'SITETITLE', 'Nombre - Panel de control' );
define ( 'FAVICONICO', URLADMINISTRADOR . '/favicon.ico' );
define ('POSTPERPAG', 2);

//variables tipo de usuario
global $usertype;
$usertype = array(
	array( 'status' => '0', 'nombre' => 'Administrador'),
	array( 'status' => '1', 'nombre' => 'Editor'),
	array( 'status' => 'a', 'nombre' => 'default'),
);

//ARCHIVOS: variable indica que archivo descargar, para agregar o quitar, modificar variable
global $archivos;
$archivos = array(
    array(
        'label' => 'Itinerarios',
        'optionName' => 'itinerarios',
    ),
    array(
        'label' => 'Salidas y Precios',
        'optionName' => 'salidas-precios',
    ),
    array(
        'label' => 'Comparar Programas',
        'optionName' => 'comparar-programas',
    ),
    array(
        'label' => 'Agencias',
        'optionName' => 'agencias',
	),
	array(
        'label' => 'Asistencia',
        'optionName' => 'asistencia',
    ),
);


global $menuModulos;
$menuModulos = array(
	array(
		'titulo' => 'Galerías',
		'texto' => 'Administrar: Borrar, cargar y editar.',
		'template' => 'galerias',
		'slug' => '',
		'user' => 'a',
	),
	array(
		'titulo' => 'Celebrities',
		'texto' => 'Administrar: Borrar, cargar y editar.',
		'template' => 'celebrities',
		'slug' => '',
		'user' => 'a',
	),
	array(
		'titulo' => 'Bonus Track',
		'texto' => 'Administrar: Borrar, cargar y editar.',
		'template' => 'bonus-track',
		'slug' => '',
		'user' => 'a',
	),
	array(
		'titulo' => 'Categorias',
		'texto' => 'Manipular las distintas categorias de las galerias.',
		'template' => 'categorias',
		'slug' => '',
		'user' => 'a',
	),
	array(
		'titulo' => 'Archivos descargas',
		'texto' => 'Administrar los archivos de descargas (pdfs).',
		'template' => 'archivos-descargas',
		'slug' => '',
		'user' => 'a',
	),
	array(
		'titulo' => 'Popups',
		'texto' => 'Activar o desactivar popups.',
		'template' => 'promociones',
		'slug' => '',
		'user' => 'a',
	),
	array(
		'titulo' => 'Agencias',
		'texto' => 'Administrar sucursales.',
		'template' => 'sucursales',
		'slug' => '',
		'user' => 'a',
	),
	array(
		'titulo' => 'Slider seguridad',
		'texto' => 'Modificar seguridad.',
		'template' => 'editar-slider',
		'slug' => 'seguridad',
		'user' => 'a',
	),
	array(
		'titulo' => 'Comentarios',
		'texto' => 'Modificar los comentarios.',
		'template' => 'editar-slider',
		'slug' => 'comentarios',
		'user' => 'a',
	),
	/*array(
		'titulo' => 'Biblioteca de medios',
		'texto' => 'Subir, borrar y manipular archivos e imagenes.',
		'template' => 'biblioteca-medios',
		'slug' => '',
		'user' => 'a',
	),*/
);

//variables de categorias de galeria de imagenes / si existen
global $categoriasGalerias;//define las categorias para cargar galerias
$categoriasGalerias = array(
	array( 'slug' => 'galeria1', 'nombre' => 'Galeria 1'),
);