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
    <div class="header-image-wrapper" data-src="" data-src-retina="" data-src-movil="" data-src-movil-retina=""></div>
    <span class="deco-corazon-boxes deco-corazon-boxes-blanco animate-element fade-in"></span>
    
    <span class="texto-vertical texto-vertical-blanco animate-element fade-in">Galería</span>

    <div class="contenedor">

        <h1 class="titulo-base animate-element slide-left">
            Re by Celebrities
        </h1>
        
        <p class="parrafo-separador-blanco animate-element slide-left">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut minim veniam.
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
            <?php $posts = getPosts( 'celebrities' );
            
            if ( $posts == null ) :

                getTemplate('error');

            else :
                $categorias = getCategoryFromLoop($posts);    

                if ( count($categorias) > 1 ) : ?>

                <div class="categorias-wrapper">
                    <p class="parrafo-separador animate-element slide-left">
                        Filtros
                    </p>
                    <ul class="categorias">
                        <li data-categoria="todas" class="btn category-filter" style="animation-delay:0s">
                            Todas
                        </li>

                    <?php
                    $delay = 0;
                    foreach ( $categorias as $categoria ) {
                        if ( $dispositivo != 'movil' ) {
                            $delay = $delay + 0.2;
                        }
                        
                        ?>
                        <li data-categoria="<?php echo $categoria; ?>" class="animate-element slide-up category-filter" style="animation-delay: <?php echo $delay; ?>s">
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
                            $delay = $delay + 0.2;
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