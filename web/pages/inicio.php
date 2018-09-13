<?php
/*
 * PAGE TEMPLATE: PAGINA INICIO
 * es el html de la pagina de inicio
*/

getTemplate('head'); ?>
<!-- -------header------- -->
    <header class="header-inicio">
        
        <div class="contenedor">
            <h1 class="main-title-inicio">
                <span class="sr-only">Usa 15: New York, Miami, Orlando</span>
                <img src="<?php echo MAINSURL; ?>/assets/images/texto-inicio.png" alt="Usa 15: New York, Miami, Orlando">
            </h1>
            <button href="entrevista" class="btn btn-fucsia scroll-to">
                Pedí tu entrevista
            </button>
            
            <?php getTemplate('button-share', $data = array( 'color'=>'blanco' ) ); ?>

        </div>

    </header>
    
    <main role="main">
    
    <!-- ------- NOSOTROS ------- -->

        <div id="somosre" class="section-wrapper">
            <div class="contenedor">
                <div class="front-reduce">
                    <h2 class="titulo-base">
                        <span class="sr-only">Somos Re</span>
                        <img src="<?php echo MAINSURL; ?>/assets/images/logo-inicio.png" alt="Logo Somos Re">
                    </h2>

                    <p class="super-parrafo">
                        Es el nombre de una comunidad cancherísima de Girls Teens donde podés encontrar un mundo pensado para vos. En RE te proponemos un viaje diferente para festejar tus quince. Con nosotros vas a conocer mucho más que solo Disney.
                    </p>

                    <p>
                        Te ofrecemos un itinerario único en su tipo con servicios de primer nivel y contenidos exclusivos que te garantizan la experiencias más segura y divertida.
                    </p>
                    <p>
                        Los productos RE son operados y respaldados por el Grupo Expreso Sur. Una organización turísticas con 18 años de impecable trayectoria.
                    </p>
                    <p>
                        Además, nuestro equipo de profesionales especificamente preparado para desarrollarse en el mundo RE, te va a cuidar siempre para que tu única preocupación sea pasarla bien.
                    </p>

                    <p>
                        <a href="#" target="_blank" class="btn btn-borde-fucsia">
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
                    <h2 class="titulo-base texto-uppercase">
                        Programas Exclusivos.
                    </h2>

                    <p class="parrafo-separador">
                        Descubrí la información sobre nuestros productos.
                    </p>

                    <ul class="btns-wrapper">
                        <li>
                            <a href="#" target="_blank" class="btn btn-amarillo">
                                Itinerarios
                            </a>
                        </li>

                        <li>
                            <a href="#" target="_blank" class="btn btn-verde">
                                Salidas y Precios
                            </a>
                        </li>

                        <li>
                            <a href="#" target="_blank" class="btn btn-fucsia">
                                Comparar programas
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </main>
    

<!-- ------- GALERIAS ------- -->
    <section >
        <div class="row">

            <div id="experiencia" class="wrapper-box galeria-box">
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

            <div id="celebrities" class="wrapper-box galeria-box">
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

            <div id="bonustrack" class="wrapper-box galeria-box">
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

            <div id="fiesta15" class="wrapper-box galeria-box">
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
         
    <ul class="slider-wrapper owl-carousel">
        
        <?php $sliderSeguridad = getSliders('seguridad');
            
            if ( $sliderSeguridad != null) : ?>
                <?php foreach ( $sliderSeguridad as $item ) { ?>
                    
                    <li class="slider-item">
                        <figure>
                            <span class="background"></span>
                            <img class="owl-lazy" data-src="<?php echo UPLOADSURL . '/'. $item['slider_imagen']; ?>" alt="<?php echo $item['slider_titulo']; ?>">
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
        
        <div class="contenedor">

            <h2 class="instagram-title">
                <a href="<?php echo LINK_INSTAGRAM; ?>" target="_blank">
                    <?php echo USUARIO_INSTAGRAM; ?>
                </a>
            </h2>
            
            <div id="instagram-wrapper">
                
                Cargando.<span class="animation-blink">.</span><span class="animation-blink" style="animation-delay: 0.5s;">.</span>

            </div>

        </div>

    </section>

<!-- ------- TESTIMONIOS ------- -->
    <section id="testimonios">
        <ul class="slider-wrapper owl-carousel">
        
        <?php $testimonios = getSliders('comentarios');
            
            if ( $testimonios != null) : ?>
                <?php foreach ( $testimonios as $item ) { ?>
                    
                    <li class="slider-item">
                        <figure>
                            <span class="background"></span>
                            <img class="owl-lazy" data-src="<?php echo UPLOADSURL . '/'. $item['slider_imagen']; ?>" alt="<?php echo $item['slider_titulo']; ?>">
                        </figure>

                        <div class="slider-contenido contenedor">
                            <img class="reset-image" src="<?php echo MAINSURL; ?>/assets/images/re-logo-testimonio.png">
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
                    <img src="<?php echo MAINSURL; ?>/assets/images/usa-15.png">
                    <h2 class="titulo-base">
                        Dónde comprar tu viaje Re.
                    </h2>
                    <p class="parrafo-separador">
                        Encontrá la Agencia Autorizada de tu provincia.
                    </p>

                    <p>
                        <a href="#" target="_blank" class="btn btn-blanco">
                            Ver agencias
                        </a>
                    </p>
                </div>
            </div>
            
            <div class="wrapper-box map-wrapper">

                <!--<img src="<?php echo MAINSURL; ?>/assets/images/temp/mapa.jpg" style="display:block;margin:0 auto;heigth:100%;">-->
            </div>
        
        </div>

    </section>

<!-- ------- FORMULARIO ------- -->
    <section class="section-wrapper" id="entrevista">

        <div class="contenedor">
            <div class="front-reduce">
                <h2 class="titulo-base">
                    Pedí tu entrevista.
                </h2>

                <?php getTemplate('formulario'); ?>
            </div>
        </div>

    </section>

<?php getTemplate('footer');