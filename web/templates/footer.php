		
	</div><!-- // INNER WRAPPER -->

	<footer class="main-footer">

		<nav class="menu-footer">

			<div class="menu-footer-wrapper brand-name">
				<a href="<?php echo MAINSURL; ?>">
					
					<picture>
                        <source srcset="<?php echo MAINSURL; ?>/assets/images/logo-footer.png, <?php echo MAINSURL; ?>/assets/images/logo-footer@2x.png 2x">
						<img src="<?php echo MAINSURL; ?>/assets/images/logo-footer.png" alt="Somos Re">
					</picture>
				</a>
				<p class="legales-footer">
					<small>Los productos RE son operados y respaldados por el Grupo Expreso Sur. Una organización turísticas con 18 años de impecable trayectoria.</small>
				</p>
				<p><small>Todos los derechos reservados.</small></p>
			</div>

			<ul class="menu-footer-wrapper">
				
				<?php 
				global $menus;
				
				foreach ( $menus['menuFooter1'] as $menu ) {
					//el menu es distinto en lapagina de inicio porque tiene scroll, en las otras paginas no.
					if ( PAGEACTUAL == 'inicio' ) : 
					?>
					<li>
						<a href="<?php echo $menu['slug']; ?>"<?php if ( $menu['link_externo'] ) {echo ' target="_blank"'; } ?> <?php if ( !($menu['link_externo']) ) {echo 'class="scroll-to"'; } ?>>
							<?php echo $menu['nombre']; ?>
						</a>
					</li>
					<?php else : ?>
					<li>
						<a href="<?php echo MAINSURL . '/#' . $menu['slug']; ?>"<?php if ( $menu['link_externo'] ) {echo ' target="_blank"'; } ?>>
							<?php echo $menu['nombre']; ?>
						</a>
					</li>
					<?php 
					endif;
				} ?>
			
			</ul>

			<ul class="menu-footer-wrapper">
				
				<?php 
				global $menus;
				
				foreach ( $menus['menuFooter2'] as $menu ) { 
					if ( PAGEACTUAL == 'inicio' ) : 
						?>
						<li>
							<a href="<?php echo $menu['slug']; ?>"<?php if ( $menu['link_externo'] ) {echo ' target="_blank"'; } ?> <?php if ( !($menu['link_externo']) ) {echo 'class="scroll-to"'; } ?>>
								<?php echo $menu['nombre']; ?>
							</a>
						</li>
						<?php else : ?>
						<li>
							<a href="<?php echo MAINSURL . '/#' . $menu['slug']; ?>"<?php if ( $menu['link_externo'] ) {echo ' target="_blank"'; } ?>>
								<?php echo $menu['nombre']; ?>
							</a>
						</li>
					<?php 
					endif;
				} ?>
			 
			</ul>

			<ul class="menu-footer-wrapper">
				
				<li class="newsleter-wrapper">
					<form method="POST" name="newsletter-form" id="newsletter-form" class="newsletter-form">
						<legend>Newsletter</legend>
						<div class="form-group form-group-full">
							<input type="email" name="contacto_email" class="input-default" required>
							<label for="contacto_email">Email</label>
							<span class="msj-error-input">
								Formato de email inválido
							</span>
							<input type="submit" value=">">
						</div>
						
					</form>
				</li>

				<li>
					<a href="<?php echo LINK_INSTAGRAM; ?>" target="_blank">
						Instagram
					</a>
				</li>

				<li>
					<a href="<?php echo LINK_FACEBOOK; ?>" target="_blank">
						Facebook
					</a>
				</li>
				<span class="deco-corazon-footer"></span>
			</ul>

			<div class="menu-footer-wrapper go-up-wrapper">
				<button class="btn go-up">
					Top <span>^</span>
				</button>
			</div>
		</nav>
	</footer>
	
	<?php getTemplate('hit'); ?>

</div><!-- // MAIN WRAPPER -->
	
	<?php getScripts( PAGEACTUAL, array('owlcarousel') ); ?>

</body>
</html>