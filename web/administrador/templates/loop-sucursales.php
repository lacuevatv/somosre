<li class="loop-noticias-backend-item">
    <article class="row">
        <div class="col-30">
            <div class="wrapper-mapa">
                <?php 
                $imagen = URLADMINISTRADOR . '/assets/images/staticmapa-defecto.png';
                 if ( $data['sucursal_mapa'] != '') {
                    $imagen = UPLOADSURLIMAGES . '/' . $data['sucursal_mapa'];
                 }
                 ?>
                <img src="<?php echo $imagen; ?>">
           </div>
        </div>
        <div class="col-70">
            
            <h1 class="titulo-noticia-small">
                <?php echo $data['sucursal_titulo']; ?>
            </h1>
            <p class="links-edicion-noticias">
                <?php echo $data['sucursal_texto']; ?>
            </p>
            <p class="links-edicion-noticias">
                <a href="index.php?admin=editar-sucursales&id=<?php echo $data['sucursal_id']; ?>" title="Editar" class="btn btn-edit-news">
                    Editar
                </a>
                <a href="<?php echo $data['sucursal_id']; ?>" title="Borrar" class="btn btn-delete-sucursales">
                    Borrar
                </a>
            </p>
            
            
        </div>
    </article>
</li>