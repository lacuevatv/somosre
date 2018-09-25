<?php
/*
 * PAGE TEMPLATE: PAGINA INICIO
 * es el html de la pagina de inicio
*/

getTemplate('head'); ?>

<header class="header-pages">

        <span class="deco-corazon-boxes deco-corazon-boxes-blanco animate-element fade-in"></span>
        
        <span class="texto-vertical texto-vertical-blanco animate-element fade-in">Galería</span>

        <div class="contenedor">

            <h1 class="titulo-base animate-element slide-left">
                Re by Celebrities
            </h1>
            
            <p class="parrafo-separador animate-element slide-left">
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
        <div class="main-wrapper">
            <div class="contenedor">
                <?php $posts = getPosts( 'celebrities' );
                
                if ( $posts == null ) :

                    getTemplate('error');

                else :
                    $categorias = getCategoryFromLoop($posts);    
                ?>
                    <div class="categorias-wrapper">
                        <p class="parrafo-separador animate-element slide-left">
                            Filtros
                        </p>
                        <ul class="categorias">
                            <li data-categoria="todas" class="category-filter">
                                Todas
                            </li>

                        <?php foreach ( $categorias as $categoria ) { ?>
                            <li data-categoria="todas" class="category-filter">
                                <?php echo $categoria; ?>
                            </li>
                        <?php } ?>
                        </ul>
                    </div>
                    <div class="galerias-wrapper">
                        <ul class="galerias">

                        <?php foreach ( $posts as $post ) {
                            getTemplate( 'galeria-single', $post );
                        } ?>

                        </ul>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </main>

<?php getTemplate('footer');