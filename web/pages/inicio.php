<?php
/*
 * PAGE TEMPLATE: PAGINA INICIO
 * es el html de la pagina de inicio
*/

getTemplate('head'); ?>
<!-- -------header------- -->
    <header>
        
        <!--<h1>Usa 15</h1>
        <p>
            New York
            Miami
            Orlando
        </p>-->
        <img src="<?php echo MAINSURL; ?>/assets/images/temp/banner-inicio.jpg" style="display:block;margin:0 auto;width:100%;">
    </header>
    
    <main role="main">
    
    <!-- ------- NOSOTROS ------- -->

        <div class="section-wrapper">
            <div class="contenedor">
                <h2>
                    Somos Re
                </h2>

                <p>
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
                    <a href="#" target="_blank" class="btn">
                        Ver asistencia
                    </a>
                </p>
            </div>
        </div>

<!-- ------- PROGRAMAS ------- -->
        <div class="section-wrapper">

            <div class="contenedor">
                <h2>
                    Programas Exclusivos
                </h2>

                <p>
                    Descubrí la información sobre nuestros productos.
                </p>

                <ul>
                    <li>
                        <a href="#" target="_blank" class="btn">
                            Itinerarios
                        </a>
                    </li>

                    <li>
                        <a href="#" target="_blank" class="btn">
                            Salidas y Precios
                        </a>
                    </li>

                    <li>
                        <a href="#" target="_blank" class="btn">
                            Comparar programas
                        </a>
                    </li>
                </ul>
            
            </div>
        </div>
        
    </main>
    

<!-- ------- GALERIAS ------- -->
    <section >
        <div class="row">

            <div id="experiencia" class="wrapper-box galeria-box">
                <div class="contenedor-left">
                    <h2>    
                        La experiencia Re.
                    </h2>
                    <p>
                        Mirá la experiencia Re.
                    </p>
                    <a class="btn" href="#">
                        Ver experiencia
                    </a>
                </div>
            </div>

            <div id="celebrities" class="wrapper-box galeria-box">
                <div class="contenedor-right">
                    <h2>    
                        Re by Celebrities.
                    </h2>
                    <p>
                        Compartí con los Mellis Nayar.
                    </p>
                    <a class="btn" href="#">
                        Ver experiencia
                    </a>
                </div>
            </div>

            <div id="bonustrack" class="wrapper-box galeria-box">
                <div class="contenedor-left">
                    <h2>    
                        Bonus Track.
                    </h2>
                    <p>
                        Siempre te damos más de lo que esperás.
                    </p>
                    <a class="btn" href="#">
                        Ver extras
                    </a>
                </div>
            </div>

            <div id="fiesta15" class="wrapper-box galeria-box">
                <div class="contenedor-right">
                    <h2>    
                        Tu fiesta de 15.
                    </h2>
                    <p>
                        Ya no tenés que de3cidir entre Fiesta o Viaje.
                    </p>
                    <a class="btn" href="#">
                        Ver fiesta
                    </a>
                </div>
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
                            <h2>
                                <?php echo $item['slider_titulo']; ?>
                            </h2>

                            <p>
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

            <h2>
                <a href="<?php echo LINK_INSTAGRAM; ?>" target="_blank">
                    <?php echo USUARIO_INSTAGRAM; ?>
                </a>
            </h2>
            <img src="<?php echo MAINSURL; ?>/assets/images/temp/instagram.jpg" style="display:block;margin:0 auto;width:100%;">

        </div>

    </section>

<!-- ------- TESTIMONIOS ------- -->
    <section id="testimonios" class="section-wrapper">
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
                            <h2>
                                Lo que ellas dicen
                            </h2>

                            <p class="comentario">
                                <q><?php echo $item['slider_texto']; ?></q><br>
                                <?php echo $item['slider_titulo']; ?>
                            </p>
                            
                        </div>
                    </li>

                <?php } ?>
            <?php endif; ?>

        </ul>
    </section>

<!-- ------- AGENCIAS ------- -->
    <section class="section-wrapper">

        <div class="row">
            <div class="wrapper-box agencias">
                <div class="contenedor-left">
                    <h2>
                        Dónde comprar tu viaje Re.
                    </h2>
                    <p>
                        Encontrá la Agencia Autorizada de tu provincia.
                    </p>

                    <p>
                        <a href="#" target="_blank" class="btn">
                            Ver agencias
                        </a>
                    </p>
                </div>
            </div>
            
            <div class="wrapper-box map-wrapper">

                <img src="<?php echo MAINSURL; ?>/assets/images/temp/mapa.jpg" style="display:block;margin:0 auto;heigth:100%;">
            </div>
        
        </div>

    </section>

<!-- ------- FORMULARIO ------- -->
    <section class="section-wrapper" id="entrevista">

        <div class="contenedor">

            <h2>
                Pedí tu entrevista
            </h2>

            <?php getTemplate('formulario'); ?>

        </div>

    </section>

<?php getTemplate('footer');