<?php
/*
 * Lista los post
 * Since 3.0
 * 
*/
load_module( 'sucursales' );
$sucursales = getSucursales( POSTPERPAG );
?>
<!---------- noticias ---------------->
<div class="contenido-modulo">
	<h1 class="titulo-modulo">
		Ver Sucursales
	</h1>
	<div class="container">
		
		<div class="row">
			<div class="col">
			<ul class="loop-noticias-backend">
                
            <?php if ($sucursales != null) :

				for ($i=0; $i < count($sucursales); $i++) { 
                    
                    getTemplate( 'loop-sucursales', $sucursales[$i] );    
					
				}

            endif;
            ?>
        		
        	</ul>
        	</div><!-- // col -->
        </div><!-- // row -->
    	<div class="row">
    		<div class="col ver-mas-noticias">
        		<button id="load-more-sucursales" class="btn btn-primary">Ver más</button>
        		<p class="loading-news-ajax"></p>
        	</div>
    	</div>
		
	</div><!-- // container gral modulo -->
</div><!-- // container -->
<!-- botones del modulo -->
<footer class="footer-modulo container">
    <a type="button" href="index.php" class="btn">Volver al inicio</a>
    <a type="button" href="index.php?admin=editar-sucursales" class="btn">Agregar nueva</a>
</footer>

<!---------- fin noticias ---------------->