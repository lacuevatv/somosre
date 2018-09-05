<?php
/*
 * editar slider
 * Edita el slider seleccionado o crea uno nuevo
 * Since 3.0
 * 
*/
global $userStatus;
if ($userStatus != '0' && $userStatus != '1' ) {
	echo 'No tiene permisos para ver esta sección';
  	
  	exit;
}
require_once("inc/functions.php");
load_module( 'sliders' );
//recupera slug a buscar
global $slug;

if ($slug != '') {
	//busca en la base de datos los datos del slider
	$sliders = getSliderAdmin ( $slug );
}

$template = 'loop-slider';

/*if ($slug == 'comentarios') {
	$template = 'loop-mini-slider';
}*/

?>

<div class="contenido-modulo">
	<h1 class="titulo-modulo">
		Editor Sliders: <?php echo $slug; ?>
	</h1>
	<div class="container">

		<div id="imagen_destacada_wrapper">
			<button id="new-item" class="btn btn-primary">Agregar nuevo item</button>
		</div>

		<ul id="<?php echo $slug; ?>" class="sliders-wrapper">
			
			<?php
			if ( $sliders != null ) :
				foreach ( $sliders as $slider ) {
					
					getTemplate($template, $slider);

				}
			else :
				echo 'No hay ninguno cargado';
			endif; ?>

		</ul>
	</div><!-- // container -->
</div><!-- // wrapper interno modulo -->
<div id="dialog">
	
</div>
<!-- botones del modulo -->
<footer class="footer-modulo container">
    <a type="button" href="index.php" class="btn">Volver al inicio</a>
</footer>