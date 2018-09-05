<?php
/*
 * Since 3.0
 * 
*/
load_module( 'contactos' );
?>

<!---------- noticias ---------------->
<div class="contenido-modulo">
	<div class="container">
		
		<?php 
		$suscriptores = getContacts();
		?>
		<div class="contacts-container">
			<div class="btn-group" role="group" aria-label="botones-emails">

			  <button id="export_excel" type="button" class="btn btn-default">
			  	Exportar a Excel
			  </button>
			  <!--<button id="new-suscriptor" type="button" class="btn btn-primary">
			  	Nuevo Suscriptor
			  </button>-->
			  
			</div>
			<table class="tabla-suscriptores" width="100%">
				<thead>
					<tr>
						<td>
							Nombre y apellido
						</td>
						<td>
							Teléfono
						</td>
						<td>
							Celular
						</td>
						<td>
							Email
						</td>
						<td>
							Colegio
						</td>
						<td>
							Provincia
						</td>
						<td>
							Ciudad
						</td>
						<td>
							Fecha de nacimiento
						</td>
						<td>
							¿Cómo llegaste?
						</td>
						<td>
							Adulto - Nombre
						</td>
						<td>
							Adulto - email
						</td>
						<td>
							Adulto - Teléfono
						</td>
						<td>
							Adulto - Horarios
						</td>
						<td>
							Enviado el
						</td>
						<td>
							Tipo Formulario
						</td>
					</tr>
				</thead>
				<tbody>
					<?php 

					if ( $suscriptores != null ) :
						foreach ($suscriptores as $suscriptor) { ?>

							<tr>
								<td>
									<input type="hidden" name="contacto_id" value="<?php echo $suscriptor['contacto_id']; ?>">
									<?php echo $suscriptor['contacto_nombre']; ?>
								</td>
								<td>
									<?php echo $suscriptor['contacto_telefono']; ?>
								</td>
								<td>
									<?php echo $suscriptor['contacto_celular']; ?>
								</td>
								<td>
									<?php echo $suscriptor['contacto_email']; ?>
								</td>
								<td>
									<?php echo $suscriptor['contacto_colegio']; ?>
								</td>
								<td>
									<?php echo $suscriptor['contacto_provincia']; ?>
								</td>
								<td>
									<?php echo $suscriptor['contacto_ciudad']; ?>
								</td>
								<td>
									<?php echo $suscriptor['contacto_nacimiento']; ?>
								</td>
								<td>
									<?php echo $suscriptor['contacto_como_llegaste']; ?>
								</td>
								<td>
									<?php echo $suscriptor['contacto_adulto_nombre']; ?>
								</td>
								<td>
									<?php echo $suscriptor['contacto_adulto_email']; ?>
								</td>
								<td>
									<?php echo $suscriptor['contacto_adulto_telefono']; ?>
								</td>
								<td>
									<?php echo $suscriptor['contacto_adulto_horario']; ?>
								</td>
								<td>
									<?php echo date('d.m.y' ,strtotime($suscriptor['fecha_formulario']) ); ?>
								</td>
								<td>
									<?php echo $suscriptor['form_type']; ?>
								</td>
								<!--<td>
									<button title="Borrar suscriptor" class="del-user" data-id="<?php echo $suscriptor['contacto_id']; ?>">
										<img src="<?php echo URLADMINISTRADOR; ?>/assets/images/delbtn.png" alt="Borrar usuario">
									</button>
								</td>-->
							</tr>
						
						<?php }
						
					endif;
					?>
				</tbody>
			</table>
		</div>

		<form action="inc/export_excel.php" method="post" target="_blank" id="FormularioExportacion">
			<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
		</form>

	</div><!-- // container gral modulo -->
</div><!-- // container -->
<!-- botones del modulo -->
<div id="formulario-suscriptor">
	
</div>
<footer class="footer-modulo container">
    <a type="button" href="index.php" class="btn">Volver al inicio</a>
</footer>

<!---------- fin noticias ---------------->