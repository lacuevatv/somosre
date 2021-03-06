<?php
/*
 * PAGE TEMPLATE: PAGINA INICIO
 * es el html de la pagina de inicio
*/
$dispositivo = dispositivo();
getTemplate('head'); ?>
<div class="popup-gallery-wrapper">
    <div class="contenedor">
        <button id="close-gallery">
            Cerrar
            <div class="close-item">
            <span class="close1"></span>
            <span class="close2"></span>
            </div>
        </button>
        <div id="contenedor-popup-gallery">
            <button id="close-gallery">
                Cerrar
                <div class="close-item">
                <span class="close1"></span>
                <span class="close2"></span>
                </div>
            </button>
            <img class="loader" src="<?php echo MAINSURL; ?>/assets/images/loader-espiral.gif">
            <div class="inner-wrapper-gallery"></div>
        </div>
    </div>
</div>
<header class="header-pages">
    <div class="header-image-wrapper" data-src="portada-galeria.jpg" data-src-retina="portada-galeria.jpg" data-src-movil="portada-galeria-movil.jpg" data-src-movil-retina="portada-galeria-movil@2x.jpg">
    <span class="background-degradado-images">
    </div>
    <span class="deco-corazon-boxes deco-corazon-boxes-blanco animate-element fade-in"></span>
    
    <span class="texto-vertical texto-vertical-blanco animate-element fade-in">Galería</span>

    <div class="contenedor">
        
        <picture>
            <source srcset="<?php echo MAINSURL; ?>/assets/images/camara-icon@2x.png, <?php echo MAINSURL; ?>/assets/images/camara-icon@2x.png 2x">
            <img src="<?php echo MAINSURL; ?>/assets/images/camara-icon@2x.png" class="animate-element slide-left">
        </picture>

        <h1 class="titulo-base animate-element slide-left">
            Re en Pics
        </h1>
        
        <p class="parrafo-separador-blanco animate-element slide-left">
            Descubrí en imágenes parte de nuestro mundo. Mirá acá algunas de las experiencias que vas a vivir con Re.
        </p>

        <p>
            <a href="<?php echo MAINSURL; ?>" class="link animate-element slide-up">
                Volver.
            </a>
        </p>

    </div>
    
</header>
    
<main role="main" class="main">
    <div class="main-wrapper-galerie">
        <div class="contenedor">
            <?php $posts = getPosts( 'galerias' );
            
            if ( $posts == null ) :

                getTemplate('error');

            else :
                $categorias = getCategoryFromLoop($posts);    
                
                if ( count($categorias) > 1 ) :
                    $estilosCategorias = array('btn-borde-fucsia', 'btn-borde-amarillo', 'btn-borde-verde');
                ?>

                <div class="categorias-wrapper">
                    <p class="parrafo-separador animate-element slide-left">
                        Filtros
                    </p>
                    <ul class="categorias">
                        <li data-categoria="todas" class="btn btn-borde-fucsia animate-element slide-up category-filter category-active" style="animation-delay:0s">
                            Todas
                        </li>

                    <?php
                    $delay = 0;
                    $count = 0;
                    foreach ( $categorias as $categoria ) {
                        if ( $dispositivo != 'movil' ) {    
                            $delay = $delay + 0.2;
                        }

                        $count++;
                        //if (  $count > count($estilosCategorias)  ) {
                        if (  ! isset($estilosCategorias[$count])  ) {
                            $count = 0;
                        }

                        ?>
                        <li data-categoria="<?php echo $categoria; ?>" class="btn <?php echo $estilosCategorias[$count]; ?> animate-element slide-up category-filter" style="animation-delay: <?php echo $delay; ?>s">
                            <?php echo $categoria; ?>
                        </li>
                    <?php } ?>
                    </ul>
                </div>

                <?php endif; ?>

                <div class="galerias-wrapper">
                    <span class="sello-rojo"></span>
                    <ul class="galerias">

                    <?php
                    $delay = 0;
                    foreach ( $posts as $post ) {
                        if ( $dispositivo != 'movil' ) {
                            $delay = $delay + 0.1;
                        }
                        ?>
                        <li class="animate-element slide-left <?php echo $post['post_categoria']; ?>" style="animation-delay: <?php echo $delay; ?>s">
                            <?php getTemplate( 'galeria-single', $post ); ?>
                        </li>
                    <?php } ?>

                    </ul>
                </div>

            <?php endif; ?>
        </div>
    </div>
</main>

<?php getTemplate('footer');