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
    <div class="contenido-galeria"></div>
</article>