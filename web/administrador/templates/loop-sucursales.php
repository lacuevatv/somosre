<li class="loop-noticias-backend-item">
    <article class="row">
        <div class="col-30">
            <div class="wrapper-mapa">
            mapa
           </div>
        </div>
        <div class="col-70">
            
            <h1 class="titulo-noticia-small">
                <?php echo $data['post_titulo']; ?><?php if ($data['post_status'] != 'publicado') {echo ' | ' . $data['post_status'];} ?> | <small><?php echo date('d.m.y' ,strtotime($data['post_timestamp']) ); ?></small>
            </h1>
            <p>
                <?php if ( $data['post_resumen'] != '' ) {
                    echo $data['post_resumen'];
                } ?>
            </p>
            <p class="links-edicion-noticias">
                <a href="index.php?admin=editar-sucursales&id=' . $data['sucursal_id'];" title="Editar" class="btn-edit-news">
                    Editar
                </a>
            </p>
            
            
        </div>
    </article>
</li>