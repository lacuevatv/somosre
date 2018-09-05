<?php
//load_module( 'otros-opciones' );
global $infoAdicional;
$infoAdicional = array(
	array(
		'name' => 'Redes Sociales', 'id' => 'redes-sociales', 'data' =>	array(
			array( 'type' => 'text', 'id' => 'instragram', 'name' => 'Instagram', 'data' => '#', 'extra'=> '' ),
			array( 'type' => 'text', 'id' => 'pinterest', 'name' => 'Pinterest', 'data' => '#', 'extra'=> '' ),
			array( 'type' => 'text', 'id' => 'linkedin', 'name' => 'Linkedin', 'data' => '#', 'extra'=> '' ),
			array( 'type' => 'text', 'id' => 'twitter', 'name' => 'Twitter', 'data' => '#', 'extra'=> '' ),
			array( 'type' => 'text', 'id' => 'snapchat', 'name' => 'Snapchat', 'data' => '#', 'extra'=> '' ),
			array( 'type' => 'text', 'id' => 'vimeo', 'name' => 'Vimeo', 'data' => '#', 'extra'=> '' ),
			array( 'type' => 'text', 'id' => 'youtube', 'name' => 'Youtube', 'data' => '#', 'extra'=> '' ),
			array( 'type' => 'text', 'id' => 'spotify', 'name' => 'Spotify', 'data' => '#', 'extra'=> '' ),
			array( 'type' => 'text', 'id' => 'facebook', 'name' => 'Facebook', 'data' => '#', 'extra'=> '' ),
		),
	),
	array(
			'name' => 'Teléfonos', 'id' => 'telefonos', 'data' =>	array(
			'telefono1' => array( 'type' => 'text', 'id' => 'telefono-1', 'name' => 'telefono', 'data' => '#', 'extra'=> '' ),
			'telefono2' => array( 'type' => 'text', 'id' => 'telefono-2', 'name' => 'telefono auxiliar', 'data' => '#', 'extra'=> '' ),
		),
	),
	array(
		'name' => 'Email', 'id' => 'emails', 'data' =>	array(
			'email1' => array( 'type' => 'text', 'text', 'id' => 'email-1', 'name' => 'email', 'data' => '#', 'extra'=> '' ),
			'email2' => array( 'type' => 'text', 'text', 'id' => 'email-2', 'name' => 'email', 'data' => '#', 'extra'=> '' ),
		),
	),	
);//$infoAdicional

?>
<div class="contenido-modulo">
	<h1 class="titulo-modulo">
		Info Adicional
	</h1>
	<div class="container">

		<div class="row">
	<?php 
		//primero columnas
		for ($i=0; $i < count($infoAdicional); $i++) { ?>
			<div class="col-30">
				<h2>
					<?php echo $infoAdicional[$i]['name'] ?>
				</h2>
				<ul class="otras-opciones" data-id="<?php echo $infoAdicional[$i]['id'] ?>">
			<?php
			//luego lista de cada una
				$items = $infoAdicional[$i]['data'];
				foreach ($items as $item) { 
					if ($item['type'] == 'text' ) : ?>
					<li class="type-text">
						<label>
							<?php echo $item['name']; ?>
							<br>
							<input name="<?php echo  $infoAdicional[$i]['id'].'-'. $item['id']; ?>" type="text" value="<?php echo $item['data']; ?>">
						</label>
					</li>
					<?php else : ?>
					<li class="type-file">
						<strong class="Titulo"><?php echo $item['name']; ?>: </strong>
						<?php if ( $item['data'] != '' ) : ?>
							<input type="hidden" name="<?php echo  $infoAdicional[$i]['id'].'-'. $item['id']; ?>" value="<?php echo $item['data']; ?>">
							<a href="<?php echo UPLOADSURLFILES .'/'. $item['data']; ?>" target="_blank">
								<?php echo $item['data']; ?>
							</a>
							<button class="btn-change-file-opciones">Cambiar archivo</button>
							<button class="btn-del-file-opciones">Borrar</button>
						<?php else : ?>
							<button class="btn-change-file-opciones">Agregar Archivo</button>
						<?php endif; ?>
					</li>
					<?php endif; ?>
				<?php }//foreach ?>

				</ul>
			</div>
			
	<?php }//for columnas ?>
			
		</div><!-- //row -->
		<button class="btn btn-primary btn-save">Guardar Cambios</button>
	</div><!-- // container -->
</div><!-- // wrapper interno modulo -->
<div id="dialog"></div>
<!-- botones del modulo -->
<footer class="footer-modulo container">
    <a type="button" href="index.php" class="btn">Volver al inicio</a>
</footer>