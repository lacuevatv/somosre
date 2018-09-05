<?php
/*
 * Lista los post
 * Since 3.0
 * 
*/
load_module( 'posts' );
$posts = getPosts( 'celebrities', POSTPERPAG, '', 'orden', 'all' );
?>
<!---------- noticias ---------------->
<div class="contenido-modulo">
	<h1 class="titulo-modulo">
		Ver Posts
	</h1>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="nav-noticias-interno">
					<label>Filtrar por categoría</label>
					<select name="post_categoria" id="post_categoria" data-post-type="celebrities">
						<option value="todas">Todas</option>
						<?php 
							$categorias = getCategoryList( 'celebrities' );
							if ( $categorias!=null ) :

								for ($i=0; $i < count($categorias); $i++) { 
									echo '<option value="'.$categorias[$i]['categoria_slug'].'">'.$categorias[$i]['categoria_nombre'].'</option>';
								}

							endif;
						?>
					</select>
				</div>
			</div>
		</div><!-- // row -->
		<div class="row">
			<div class="col">
			<ul class="loop-noticias-backend">
                
            <?php if ($posts != null) :

				for ($i=0; $i < count($posts); $i++) { 
					getTemplate( 'loop-posts', $posts[$i] );    
					
				}

            endif;
            ?>
        		
        	</ul>
        	</div><!-- // col -->
        </div><!-- // row -->
    	<div class="row">
    		<div class="col ver-mas-noticias">
        		<button id="load-more" data-post-type="celebrities" class="btn btn-primary">Ver más</button>
        		<p class="loading-news-ajax"></p>
        	</div>
    	</div>
		
	</div><!-- // container gral modulo -->
</div><!-- // container -->
<!-- botones del modulo -->
<footer class="footer-modulo container">
    <a type="button" href="index.php" class="btn">Volver al inicio</a>
    <a type="button" href="index.php?admin=editar-celebrities" class="btn">Agregar nueva</a>
</footer>

<!---------- fin noticias ---------------->