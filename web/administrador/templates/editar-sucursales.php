<?php
/*
 * Editar posts / Nueva posts
 * Since 3.0
 * 
*/
require_once("inc/functions.php");
load_module( 'sucursales' );

//recupera id a buscar
$sucursalId = isset($_GET['id']) ? $_GET['id'] : null;
$sucursal = null;
$nuevo = true;

if ( $sucursalId != null ) {
	$sucursal = getSucursalById($sucursalId);
	$nuevo = false;
}

?>
<!---------- editar  ---------------->
<div class="contenido-modulo">
	<h1 class="titulo-modulo">
		<?php if ( $sucursalId == null ) {
		echo 'Agregar nueva';
	} else {
		echo 'Editar';
	} ?>
	</h1>
	<div class="container">
		<form method="POST" id="editar-sucursal-form" name="editar-sucursal-form">		
		<input type="hidden" name="sucursal_id" value="<?php echo ($sucursal) ? $sucursal['sucursal_id'] : 'new'; ?>">
			<div class="error-msj-wrapper">
				<ul class="error-msj-list">
					
				</ul>
			</div>
			
			<div class="row">
				<div class="col-30">
	<!------ TITULO DE LA NOTICIA ---------->
					<div class="form-group">
						<label for="post_title" class="larger-label">Título </label>
						<input id="post_title" name="post_title" class="larger-input" value="<?php echo ($sucursal) ? $sucursal['sucursal_titulo'] : ''; ?>">
					</div>

					<div class="form-group">
						<label for="post_email" class="larger-label">Email </label>
						<input id="post_email" name="post_email" class="larger-input" value="<?php echo ($sucursal) ? $sucursal['sucursal_email'] : ''; ?>">
					</div>

				</div><!-- // col -->
			
				<div class="col-70">
					<div class="form-group">
						<label for="post_contenido" class="larger-label">Texto</label>
						<textarea class="editor-enriquecido" name="post_contenido"><?php echo ($sucursal) ? $sucursal['sucursal_texto'] : ''; ?></textarea>
					</div>
				</div><!-- // col -->
				
			</div><!-- // row -->


			<div class="row mapa-search-wrapper">
				<div class="col-30">
					<div class="form-group">
						<label for="input_direccion" class="larger-label">Escriba la dirección aquí: </label>
						<input type="text" id="input_direccion" name="input_direccion" placeholder="Escriba la dirección aquí">
					</div>
					

					<div class="form-group">
						<label for="post_lat" class="larger-label">Latitud </label>
						<input id="post_lat" name="post_lat" class="larger-input" value="<?php echo ($sucursal) ? $sucursal['sucursal_lat'] : ''; ?>">
					</div>
					<div class="form-group">
						<label for="post_longitud" class="larger-label">Longitud </label>
						<input id="post_longitud" name="post_longitud" class="larger-input" value="<?php echo ($sucursal) ? $sucursal['sucursal_long'] : ''; ?>">
					</div>

					
				</div>
				<div class="col-70">
					<input type="hidden" name="post_mapa" value='<?php echo ($sucursal) ? $sucursal['sucursal_mapa'] : ''; ?>'>
					<div id="contenedor-mapa">
						<?php echo ($sucursal) ? $sucursal['sucursal_mapa'] : ''; ?>
					</div>
			
				</div>
			</div>

			<hr>
		   	<div class="row">	
				<div class="col">
				   	<div class="form-group save-button-right">
				   		<button type="submit" name="submit_save" class="btn btn-primary btn-submit">Guardar Cambios</button>
				   	</div>
				</div><!-- // col -->
			</div><!-- // row -->  
		</form>	
	</div><!-- // container gral modulo -->
</div>
<div id="dialog">
	
</div>
<!-- botones del modulo -->
<footer class="footer-modulo container">
    <a type="button" href="index.php" class="btn">Volver al inicio</a>
    <a type="button" href="index.php?admin=sucursales" class="btn">Volver a lista</a>
	<a type="button" href="index.php?admin=editar-sucursales" class="btn">Agregar nueva</a>
</footer>