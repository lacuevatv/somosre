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
            <h1 class="main-title-inicio">
                <span class="sr-only">Usa 15: New York, Miami, Orlando</span>

        <!-- usa 15 -->
                <picture>
                    <source srcset="<?php echo MAINSURL; ?>/assets/images/texto-inicio-15.png, <?php echo MAINSURL; ?>/assets/images/texto-inicio-15@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo MAINSURL; ?>/assets/images/texto-inicio-15.png" alt="Usa 15: New York, Miami, Orlando" class="texto-header-inicio-0 animate-element slide-down">
                </picture>
        <!-- texto 1 ny -->
                <picture>
                    <source srcset="<?php echo MAINSURL; ?>/assets/images/ny-texto1.png, <?php echo MAINSURL; ?>/assets/images/ny-texto1@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo MAINSURL; ?>/assets/images/ny-texto1.png" alt="Usa 15: New York, Miami, Orlando" class="texto-header-inicio-1 animate-text-header">
                </picture>
                
        <!-- texto 2 miami -->
                <picture>
                    <source srcset="<?php echo MAINSURL; ?>/assets/images/miami-texto2.png, <?php echo MAINSURL; ?>/assets/images/miami-texto2@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo MAINSURL; ?>/assets/images/miami-texto2.png" alt="Usa 15: New York, Miami, Orlando" class="texto-header-inicio-2 animate-text-header" style="animation-delay: 0.5s;">
                </picture>

        <!-- texto 3 orlando -->
                <picture>
                    <source srcset="<?php echo MAINSURL; ?>/assets/images/orlando-texto3.png, <?php echo MAINSURL; ?>/assets/images/orlando-texto3@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo MAINSURL; ?>/assets/images/orlando-texto3.png" alt="Usa 15: New York, Miami, Orlando" class="texto-header-inicio-3 animate-text-header" style="animation-delay: 1s;">
                </picture>

                <span class="sello-top giro-sello" style="animation-delay: 1s;"></span>
            </h1>
            <button href="entrevista" class="btn btn-fucsia scroll-to animate-element slide-left-delay bounce-loop">
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
                        Es el nombre de una comunidad cancherísima de Girls Teens donde podés encontrar un mundo pensado para vos.
                    </p>
                    <p class="animate-element slide-left">
                        En RE te proponemos un viaje diferente para festejar tus quince. Con nosotros vas a conocer mucho más que solo Disney.
                    </p>
                    <p class="animate-element slide-left">
                        Te ofrecemos un itinerario único en su tipo con servicios de primer nivel y contenidos exclusivos que te garantizan la experiencias más segura y divertida.
                    </p>

                    <!--<p class="animate-element slide-left">
                        <a href="<?php getFile( 'asistencia' ); ?>" target="_blank" class="btn btn-borde-fucsia">
                            Ver asistencia
                        </a>
                    </p>-->
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
                        Descubrí 5 opciones diferentes para disfrutar de tu viaje Re.
                    </p>

                    
                </div>

                <ul class="btns-wrapper">
                    <li>
                        <a href="<?php getFile( 'programas-itinerarios' ); ?>" target="_blank" class="btn btn-amarillo animate-element slide-left">
                            Ver los Programas
                        </a>
                    </li>

                    <li>
                        <a href="<?php getFile( 'programas-comparar' ); ?>" target="_blank" class="btn btn-verde animate-element slide-left">
                            Compararlos
                        </a>
                    </li>

                    <li>
                        <a href="<?php getFile( 'programas-precios' ); ?>" target="_blank" class="btn btn-fucsia animate-element slide-left">
                            Conocer los precios
                        </a>
                    </li>
                </ul>
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
    <section id="boxes">
        <div class="row">

            <div id="experiencia" class="wrapper-box galeria-box animate-element slide-left">
            
                <span class="deco-corazon-boxes animate-element fade-in"></span>
                
                <span class="texto-vertical animate-element fade-in">Galería</span>

                <picture>
                    <source srcset="<?php echo MAINSURL; ?>/assets/images/camara.png, <?php echo MAINSURL; ?>/assets/images/camara@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo MAINSURL; ?>/assets/images/camara.png" alt="Experiencia Re" class="image-boxes" id="camara">
                </picture>

                <div class="contenido-boxes">
                    <h2 class="titulo-base">   
                        Re en Pics
                    </h2>
                    <p class="parrafo-separador">
                        Mirá un sneak peek del mundo Re.
                    </p>
                    <a class="btn btn-fucsia" href="<?php echo MAINSURL; ?>/galeria">
                        Ver imágenes
                    </a>
                </div>

                <?php getTemplate('button-share'); ?>

            </div>

            <div id="celebrities" class="wrapper-box galeria-box animate-element slide-left" style="animation-delay: 0.5s;">

                <span class="deco-corazon-boxes animate-element fade-in"></span>

                <span class="texto-vertical texto-vertical-blanco animate-element fade-in">Celebrities</span>

                <picture>
                    <source srcset="<?php echo MAINSURL; ?>/assets/images/chicos.png, <?php echo MAINSURL; ?>/assets/images/chicos@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo MAINSURL; ?>/assets/images/chicos.png" alt="Mellí Nayar en Re" class="image-boxes" id="mellis">
                </picture>

                <div class="contenido-boxes">
                    <h2 class="titulo-base">
                        Re by Celebrities.
                    </h2>
                    <p class="parrafo-separador">
                        ¡En cada viaje tenemos estrellas invitadas! 
                    </p>
                    <a class="btn btn-fucsia" href="<?php echo MAINSURL; ?>/celebrities">
                        Ver imágenes
                    </a>
                </div>

                <?php getTemplate('button-share'); ?>

            </div>

            <div id="bonustrack" class="wrapper-box galeria-box animate-element slide-left" style="animation-delay: 0.8s;">

                <span class="deco-corazon-boxes deco-corazon-boxes-blanco animate-element fade-in"></span>

                <span class="texto-vertical texto-vertical-blanco animate-element fade-in">Bonus Track</span>

                <picture>
                    <source srcset="<?php echo MAINSURL; ?>/assets/images/auriculares.png, <?php echo MAINSURL; ?>/assets/images/auriculares@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo MAINSURL; ?>/assets/images/auriculares.png" alt="Bonux Track Re" class="image-boxes" id="headphones">
                </picture>

                <div class="contenido-boxes">
                    <h2 class="titulo-base">
                        Bonus Track.
                    </h2>
                    <p class="parrafo-separador-blanco">
                        Te damos más de lo que esperás.
                    </p>
                    <a class="btn btn-blanco" href="<?php getFile( 'bonus-track' ); ?>" target="_blank">
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
                    <img src="<?php echo MAINSURL; ?>/assets/images/quince-globos-box.png" alt="Tu fiesta de 15 en Re" class="image-boxes" id="fifteen">
                </picture>
                
                <span class="span-confeti animate-element-loop fade-in"></span>

                <div class="contenido-boxes">
                    <h2 class="titulo-base">
                        Uppers by Re
                    </h2>
                    <p class="parrafo-separador">
                        Con Re podés vivir mucho más que el viaje..
                    </p>
                    <a class="btn btn-fucsia" href="<?php getFile( 'uppers-re' ); ?>" target="_blank">
                        Ver Info
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
                                Seguridad by Re.
                            </h2>

                            <p class="parrafo-separador-blanco">
                                <strong><?php echo $item['slider_titulo']; ?></strong><br>
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
                                <img class="reset-image re-testimonios" src="<?php echo MAINSURL; ?>/assets/images/re-logo-testimonio.png">
                            </picture>

                            <h2 class="titulo-base titulo-testimonios">
                                Lo que ellas dicen.
                            </h2>
                            <p class="parrafo-separador-blanco comentario parrafo-testimonios">
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
                        Reserva tu viaje Re.
                    </h2>
                    <p class="parrafo-separador animate-element slide-left">
                        Busca el representante Re más cercano a tu casa.
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
            <img class="imagen-formulario animate-element slide-right" src="<?php echo MAINSURL; ?>/assets/images/usa-15-footer.png" alt="Usa 15: New York, Miami, Orlando" style="animation-delay:1s;" id="contact-usa">
        </picture>

    </section>

<?php getTemplate('footer');