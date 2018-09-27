<?php 
    //var_dump($data);
    if ( $data['post_imagen'] == '' ) {
        $imagen = MAINSURL . '/assets/images/default.png';
    } else {
        $imagen = UPLOADSURL . '/' . $data['post_imagen'];
    }
?>

<article data-id="<?php echo $data['post_ID']; ?>" class="galeria-article">
    <img class="imagen-galeria" src="<?php echo $imagen; ?>" alt="<?php echo $data['post_titulo']; ?>">
    <div class="contenido-galeria">
        <h1><?php echo $data['post_titulo']; ?></h1>
        <p><?php echo $data['post_resumen']; ?></p>
    </div>
    <ul class="contenido-galeria-oculto">
        <?php if ( $data['post_galeria'] == 1 && $data['post_imagenesGal'] != '' ) :
            
            $imagenes = unserialize($data['post_imagenesGal']);
            
            foreach ( $imagenes as $img ) { ?>
                <li>
                    <!--<img class="owl-lazy" data-src="<?php echo UPLOADSURL . '/'. $img; ?>">-->
                    <img src="<?php echo UPLOADSURL . '/'. $img; ?>">
                </li>
            <?php } ?>
            
        <?php endif; ?>

        <?php if ( $data['post_video'] != '' ) : ?>
            <li class="item-video">
                <a class="owl-video" href="<?php echo $data['post_video']; ?>"></a>
            </li> 
        <?php endif; ?> 
    </ul>
</article>