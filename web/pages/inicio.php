<?php
/*
 * PAGE TEMPLATE: PAGINA INICIO
 * es el html de la pagina de inicio
*/

getTemplate('head'); ?>
<!-- -------header------- -->
    <header class="header-inicio header-inicio-tablet">
        <div class="header-image-wrapper"></div>
        <ul class="lista-vertical">
            <li class="animate-element slide-down">Instagram</li>
            <li><span class="lista-vertical-separador animate-element slide-left"></span></li>
            <li class="animate-element slide-down">Facebook</li>
        </ul>
        <span class="corazon-header-gris animate-element fade-in"></span>
        <span class="linea-vertical-header animate-element fade-in"></span>
        <span class="corazon-header animate-element fade-in"></span>

        <div class="contenedor">
            <h1 class="main-title-inicio animate-element fade-in">
                <span class="sr-only">Usa 15: New York, Miami, Orlando</span>
                <picture>
                    <source srcset="<?php echo MAINSURL; ?>/assets/images/texto-inicio.png, <?php echo MAINSURL; ?>/assets/images/texto-inicio@2x.png 2x" media="(min-width: 768px)">
                    <img src="<?php echo MAINSURL; ?>/assets/images/texto-inicio.png" alt="Usa 15: New York, Miami, Orlando">
                </picture>
            </h1>
            <button href="entrevista" class="btn btn-fucsia scroll-to animate-element fade-in">
                Pedí tu entrevista
            </button>
            
            <?php getTemplate('button-share', $data = array( 'color'=>'blanco' ) ); ?>

        </div>
        <div class="deco-amarillo animate-element fade-in"></div>
    </header>
    
    <main role="main" class="main">
    
    <!-- ------- NOSOTROS ------- -->

        <div id="somosre" class="section-wrapper">
            <div class="contenedor">
                <div class="front-reduce">
                    <h2 class="titulo-base animate-element slide-left">
                        <span class="sr-only">Somos Re</span>
                        <picture>
                            <source srcset="<?php echo MAINSURL; ?>/assets/images/logo-inicio.png, <?php echo MAINSURL; ?>/assets/images/logo-inicio@2x.png 2x" media="(min-width: 768px)">
                            <img src="<?php echo MAINSURL; ?>/assets/images/logo-inicio.png" alt="Logo Somos Re">
                        </picture>
                    </h2>

                    <p class="super-parrafo animate-element slide-left">
                        Es el nombre de una comunidad cancherísima de Girls Teens donde podés encontrar un mundo pensado para vos. En RE te proponemos un viaje diferente para festejar tus quince. Con nosotros vas a conocer mucho más que solo Disney.
                    </p>

                    <p class="animate-element slide-left">
                        Te ofrecemos un itinerario único en su tipo con servicios de primer nivel y contenidos exclusivos que te garantizan la experiencias más segura y divertida.
                    </p>
                    <p class="animate-element slide-left">
                        Los productos RE son operados y respaldados por el Grupo Expreso Sur. Una organización turísticas con 18 años de impecable trayectoria.
                    </p>
                    <p class="animate-element slide-left">
                        Además, nuestro equipo de profesionales especificamente preparado para desarrollarse en el mundo RE, te va a cuidar siempre para que tu única preocupación sea pasarla bien.
                    </p>

                    <p class="animate-element slide-left">
                        <a href="<?php getFile( 'asistencia' ); ?>" target="_blank" class="btn btn-borde-fucsia">
                            Ver asistencia
                        </a>
                    </p>
                </div>
            </div>
        </div>

<!-- ------- PROGRAMAS ------- -->
        <div id="programas" class="section-wrapper">

            <div class="contenedor">
                <div class="front-reduce">
                    <h2 class="titulo-base texto-uppercase animate-element slide-left">
                        Programas Exclusivos.
                    </h2>

                    <p class="parrafo-separador animate-element slide-left">
                        Descubrí la información sobre nuestros productos.
                    </p>

                    <ul class="btns-wrapper">
                        <li>
                            <a href="<?php getFile( 'itinerarios' ); ?>" target="_blank" class="btn btn-amarillo animate-element slide-left">
                                Itinerarios
                            </a>
                        </li>

                        <li>
                            <a href="<?php getFile( 'salidas-precios' ); ?>" target="_blank" class="btn btn-verde animate-element slide-left">
                                Salidas y Precios
                            </a>
                        </li>

                        <li>
                            <a href="<?php getFile( 'comparar-programas' ); ?>" target="_blank" class="btn btn-fucsia animate-element slide-left">
                                Comparar programas
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <figure class="valija-wrapper animate-element slide-right">
            
            <picture>
                <source srcset="<?php echo MAINSURL; ?>/assets/images/confeti-valija.png, <?php echo MAINSURL; ?>/assets/images/confeti-valija@2x.png 2x" media="(min-width: 767px)">
                <img src="<?php echo MAINSURL; ?>/assets/images/confeti-valija.png" alt="Fiesta 15 Re" class="confeti parallax">
            </picture>

            <picture>
                <source srcset="<?php echo MAINSURL; ?>/assets/images/quince-valija.png, <?php echo MAINSURL; ?>/assets/images/quince-valija@2x.png 2x" media="(min-width: 767px)">
                <img src="<?php echo MAINSURL; ?>/assets/images/quince-valija.png" alt="Fiesta 15 Re" class="numero parallax">
            </picture>

            <picture>
                <source srcset="<?php echo MAINSURL; ?>/assets/images/globo-valija.png, <?php echo MAINSURL; ?>/assets/images/globo-valija@2x.png 2x" media="(min-width: 767px)">
                <img src="<?php echo MAINSURL; ?>/assets/images/globo-valija.png" alt="Fiesta 15 Re" class="corazon parallax">
            </picture>

            <picture>
                <source srcset="<?php echo MAINSURL; ?>/assets/images/valija.png, <?php echo MAINSURL; ?>/assets/images/valija@2x.png 2x" media="(min-width: 767px)">
                <img src="<?php echo MAINSURL; ?>/assets/images/valija.png" alt="Fiesta 15 Re" class="valija parallax">
            </picture>

        </figure>

    </main>
    

<!-- ------- GALERIAS ------- -->
    <section >
        <div class="row">

            <div id="experiencia" class="wrapper-box galeria-box animate-element slide-left">
            
                <span class="deco-corazon-boxes animate-element fade-in"></span>
                
                <span class="texto-vertical animate-element fade-in">Galería</span>

                <picture>
                    <source srcset="<?php echo MAINSURL; ?>/assets/images/camara.png, <?php echo MAINSURL; ?>/assets/images/camara@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo MAINSURL; ?>/assets/images/camara.png" alt="Experiencia Re" class="image-boxes">
                </picture>

                <div class="contenido-boxes">
                    <h2 class="titulo-base">   
                        La experiencia Re.
                    </h2>
                    <p class="parrafo-separador">
                        Mirá la experiencia Re.
                    </p>
                    <a class="btn btn-fucsia" href="#">
                        Ver galería
                    </a>
                </div>

                <?php getTemplate('button-share'); ?>

            </div>

            <div id="celebrities" class="wrapper-box galeria-box animate-element slide-left" style="animation-delay: 0.5s;">

                <span class="deco-corazon-boxes animate-element fade-in"></span>

                <span class="texto-vertical texto-vertical-blanco animate-element fade-in">Celebrities</span>

                <picture>
                    <source srcset="<?php echo MAINSURL; ?>/assets/images/chicos.png, <?php echo MAINSURL; ?>/assets/images/chicos@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo MAINSURL; ?>/assets/images/chicos.png" alt="Mellí Nayar en Re" class="image-boxes">
                </picture>

                <div class="contenido-boxes">
                    <h2 class="titulo-base">
                        Re by Celebrities.
                    </h2>
                    <p class="parrafo-separador">
                        Compartí con los Mellis Nayar.
                    </p>
                    <a class="btn btn-fucsia" href="#">
                        Ver experiencia
                    </a>
                </div>

                <?php getTemplate('button-share'); ?>

            </div>

            <div id="bonustrack" class="wrapper-box galeria-box animate-element slide-left" style="animation-delay: 0.8s;">

                <span class="deco-corazon-boxes deco-corazon-boxes-blanco animate-element fade-in"></span>

                <span class="texto-vertical texto-vertical-blanco animate-element fade-in">Bonus Track</span>

                <picture>
                    <source srcset="<?php echo MAINSURL; ?>/assets/images/auriculares.png, <?php echo MAINSURL; ?>/assets/images/auriculares@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo MAINSURL; ?>/assets/images/auriculares.png" alt="Bonux Track Re" class="image-boxes">
                </picture>

                <div class="contenido-boxes">
                    <h2 class="titulo-base">
                        Bonus Track.
                    </h2>
                    <p class="parrafo-separador-blanco">
                        Siempre te damos más de lo que esperás.
                    </p>
                    <a class="btn btn-blanco" href="#">
                        Ver extras
                    </a>
                </div>
                
                <?php getTemplate('button-share', $data = array( 'color'=>'blanco' ) ); ?>

            </div>

            <div id="fiesta15" class="wrapper-box galeria-box animate-element slide-left" style="animation-delay: 1s;">

                <span class="deco-corazon-boxes animate-element fade-in"></span>
                <span class="texto-vertical animate-element fade-in">Fiesta 15</span>

                <picture>
                    <source srcset="<?php echo MAINSURL; ?>/assets/images/quince-globos-box.png, <?php echo MAINSURL; ?>/assets/images/quince-globos-box@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo MAINSURL; ?>/assets/images/quince-globos-box.png" alt="Tu fiesta de 15 en Re" class="image-boxes">
                </picture>
                
                <span class="span-confeti animate-element-loop fade-in"></span>

                <div class="contenido-boxes">
                    <h2 class="titulo-base">
                        Tu fiesta de 15.
                    </h2>
                    <p class="parrafo-separador">
                        Ya no tenés que decidir entre Fiesta o Viaje.
                    </p>
                    <a class="btn btn-fucsia" href="#">
                        Ver fiesta
                    </a>
                </div>

                <?php getTemplate('button-share'); ?>

            </div>

        </div><!-- // .row -->

    </section>
    
<!-- ------- SLIDER ------- -->
    <section id="seguridad">
    
    <span class="deco-corazon-boxes deco-corazon-boxes-blanco animate-element fade-in"></span>
    <span class="texto-vertical texto-vertical-blanco animate-element fade-in">Seguridad</span>
    <span class="deco-corazon-seguridad animate-element fade-in"></span>

    <ul class="slider-wrapper owl-carousel">
        
        <?php $sliderSeguridad = getSliders('seguridad');
            
            if ( $sliderSeguridad != null) : ?>
                <?php foreach ( $sliderSeguridad as $item ) { ?>
                    
                    <li class="slider-item">
                        <figure>
                            <span class="background"></span>
                            
                            <?php if ( dispositivo() == 'movil' && $item['slider_imagen_movil'] != '') : ?>
                                <img class="owl-lazy" data-src="<?php echo UPLOADSURL . '/'. $item['slider_imagen_movil']; ?>" alt="<?php echo $item['slider_titulo']; ?>">
                            
                                <?php else : ?>
                            
                            <img class="owl-lazy" data-src="<?php echo UPLOADSURL . '/'. $item['slider_imagen']; ?>" alt="<?php echo $item['slider_titulo']; ?>">
                            
                            <?php endif; ?>
                        </figure>

                        <div class="slider-contenido contenedor">
                            <h2 class="titulo-base">
                                <?php echo $item['slider_titulo']; ?>
                            </h2>

                            <p class="parrafo-separador-blanco">
                                <?php echo $item['slider_texto']; ?>
                            </p>
                            
                        </div>
                    </li>

                <?php } ?>
            <?php endif; ?>

        </ul>

    </section>

<!-- ------- INSTAGRAM ------- -->
    <section id="instagram" class="section-wrapper">
        
        <span class="deco-corazon-boxes animate-element fade-in"></span>
        <span class="texto-vertical" style="opacity:0;">Instagram</span>

        <div class="contenedor">

            <h2 class="instagram-title">
                <a href="<?php echo LINK_INSTAGRAM; ?>" target="_blank">
                    <?php echo USUARIO_INSTAGRAM; ?>
                </a>
            </h2>
            
            <div id="instagram-wrapper" class="center-box">
                
                Cargando.<span class="animation-blink">.</span><span class="animation-blink" style="animation-delay: 0.5s;">.</span>

            </div>

        </div>

    </section>

<!-- ------- TESTIMONIOS ------- -->
    <section id="testimonios">
        <span class="deco-corazon-boxes deco-corazon-boxes-blanco animate-element fade-in"></span>
        <span class="texto-vertical texto-vertical-blanco animate-element fade-in">Testimonios</span>
        
        <ul class="slider-wrapper owl-carousel">
        
        <?php $testimonios = getSliders('comentarios');
            
            if ( $testimonios != null) : ?>
                <?php foreach ( $testimonios as $item ) { ?>
                    
                    <li class="slider-item">
                        <figure>
                            <span class="background"></span>
                            
                            <?php if ( dispositivo() == 'movil' && $item['slider_imagen_movil'] != '') : ?>
                                <img class="owl-lazy" data-src="<?php echo UPLOADSURL . '/'. $item['slider_imagen_movil']; ?>" alt="<?php echo $item['slider_titulo']; ?>">
                            <?php else : ?>

                            <img class="owl-lazy" data-src="<?php echo UPLOADSURL . '/'. $item['slider_imagen']; ?>" alt="<?php echo $item['slider_titulo']; ?>">
                            
                            <?php endif; ?>
                        </figure>

                        <div class="slider-contenido contenedor">
                            
                            <picture>
                                <source srcset="<?php echo MAINSURL; ?>/assets/images/re-logo-testimonio.png, <?php echo MAINSURL; ?>/assets/images/re-logo-testimonio@2x.png 2x">
                                <img class="reset-image" src="<?php echo MAINSURL; ?>/assets/images/re-logo-testimonio.png">
                            </picture>

                            <h2 class="titulo-base">
                                Lo que ellas dicen.
                            </h2>
                            <p class="parrafo-separador-blanco comentario">
                                <q><?php echo $item['slider_texto']; ?></q><br>
                                <span><?php echo $item['slider_titulo']; ?></span>
                            </p>
                            
                        </div>
                    </li>

                <?php } ?>
            <?php endif; ?>

        </ul>
    </section>

<!-- ------- AGENCIAS ------- -->
    <section id="agencias">

        <div class="row">
            <div class="wrapper-box agencias">
                <div class="contenedor-left">
                    <span class="deco-corazon-boxes animate-element fade-in"></span>
                    <span class="texto-vertical animate-element fade-in">Agencias</span>
                    
                    <picture>
                        <source srcset="<?php echo MAINSURL; ?>/assets/images/usa-15.png, <?php echo MAINSURL; ?>/assets/images/usa-15@2x.png 2x">
                        <img src="<?php echo MAINSURL; ?>/assets/images/usa-15.png" class="animate-element slide-left">
                    </picture>

                    <h2 class="titulo-base animate-element slide-left">
                        Dónde comprar tu viaje Re.
                    </h2>
                    <p class="parrafo-separador animate-element slide-left">
                        Encontrá la Agencia Autorizada de tu provincia.
                    </p>

                    <p>
                        <a href="<?php getFile( 'agencias' ); ?>" target="_blank" class="btn btn-blanco animate-element slide-left">
                            Ver agencias
                        </a>
                    </p>
                </div>
            </div>
            
            <?php $marcadores = getMapDataSucursales();

            if ( $marcadores != null ) : ?>

                <ul style="display:none">
                    <?php foreach ($marcadores as $marcador ) { ?>

                        <li class="sucursales-textos sucursal-texto-<?php echo $marcador["sucursal_id"]; ?>">
                            <article>
                                <div style="font-family:'Montserrat';font-size:0.8em;">
                                    <h1 style="font-size:110%;font-weight:500;font-family:'Montserrat';">
                                        <?php echo $marcador['sucursal_titulo']; ?>
                                    </h1>
                                    -
                                    <?php echo $marcador['sucursal_texto']; ?>
                                    -
                                    <?php echo $marcador['sucursal_email']; ?>
                                </div>
                            </article>
                        </li>

                    <?php } ?>
                </ul>
            <?php endif; ?>

            <div class="wrapper-box map-wrapper" id="map">
                <p class="text-center text-blanco">
                    Cargando.<span class="animation-blink">.</span><span class="animation-blink" style="animation-delay: 0.5s;">.</span>
                </p>
                
                <?php if ( $marcadores != null ) : ?>

                <?php getTemplate('google-maps', $marcadores); ?>
                
                <?php endif; ?>
            </div>
        
        </div>

    </section>

<!-- ------- FORMULARIO ------- -->
    <section class="section-wrapper" id="entrevista">

        <span class="deco-corazon-boxes animate-element fade-in"></span>
        <span class="texto-vertical animate-element fade-in">Formulario</span>

        <div class="contenedor">
            <div class="front-reduce">
                <h2 class="titulo-base animate-element slide-left">
                    Pedí tu entrevista.
                </h2>

                <?php getTemplate('formulario'); ?>
            </div>
        </div>

        <picture>
            <source srcset="<?php echo MAINSURL; ?>/assets/images/usa-15-footer.png, <?php echo MAINSURL; ?>/assets/images/usa-15-footer@2x.png 2x" media="(min-width: 768px)">
            <img class="imagen-formulario animate-element slide-right" src="<?php echo MAINSURL; ?>/assets/images/usa-15-footer.png" alt="Usa 15: New York, Miami, Orlando">
        </picture>

    </section>

<?php getTemplate('footer');