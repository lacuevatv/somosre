<li class="item-slider" id="<?php echo $data['slider_id']; ?>">
    
    <div class="row">	 
        <!-- col -->
        <div class="col-50">
        <form id="edit_slider_imagen" name="edit_slider_imagen" data-sliderID="<?php echo $data['slider_id']; ?>" method="POST" >
            <div class="form-group">
                <input type="hidden" name="slider_imagen" value="<?php echo $data['slider_imagen']; ?>">

                <img id="slider_imagen_Preview-<?php echo $data['slider_id']; ?>" src="<?php echo UPLOADSURLIMAGES . '/' . $data['slider_imagen']; ?>" class="img-responsive imagen-slider">
            </div>
            <div class="form-group recargar-btn-wrapper col-50">
                
                <button data-sliderID="<?php echo $data['slider_id']; ?>" type="button" class="btn btn-primary btn-recargar">Cargar nueva foto</button>
                <span class="msj-guardar-imagen"></span>
                
            </div>
            <div class="row">
            <div class="form-group input-sliders col-50">
                <label for="slider_orden">Orden de ubicación</label>
                <input type="number" name="slider_orden" value="<?php echo $data['slider_orden']; ?>">
            </div>
            <div class="col-50">
                <input type="hidden" name="slider_imagen_movil" value="<?php echo ($data['slider_imagen_movil'] != '') ? $data['slider_imagen_movil'] : $data['slider_imagen']; ?>">
                <?php 
                if ( $data['slider_imagen_movil'] != '' ) {
                    echo '<img id="slider_imagen_movil_Preview-' . $data['slider_id'] . '" src="'.  UPLOADSURLIMAGES . '/' . $data['slider_imagen_movil'] .'" class="img-responsive imagen-para-movil">';
                } else {
                    echo '<img id="slider_imagen_movil_Preview-' . $data['slider_id'] . '" src="'.  UPLOADSURLIMAGES . '/' . $data['slider_imagen'] .'" class="img-responsive imagen-para-movil">';
                }
                ?>
                <button data-sliderID="<?php echo $data['slider_id']; ?>" type="button" class="btn btn-primary btn-recargar-movil">Cargar imagen movil</button>
            </div>
            </div>
           
        </form>
        
        </div><!-- //col -->
        <!-- col -->
        <div class="col-50">
            <div class="form-group input-sliders">
                <label for="slider_titulo">Titulo a mostrar</label>
                <input type="text" name="slider_titulo" id="slider_titulo" value="<?php echo $data['slider_titulo']; ?>">
            </div>

            <div class="form-group input-sliders">
                <label for="sliderLink">URL</label>
                <input type="text" name="sliderLink" value="<?php echo $data['slider_link']; ?>">
            </div>

            <div class="form-group input-sliders">
                <label for="slider_textoLink">Texto boton</label>
                <input type="text" name="slider_textoLink" id="slider_textoLink" value="<?php echo $data['slider_textoLink']; ?>">
            </div>

            <div class="form-group input-sliders">
                <label for="slider_texto">Texto slider</label>
                <textarea id="slider_texto" name="slider_texto"><?php echo $data['slider_texto']; ?></textarea>
            </div>
            
        </div><!-- //col -->
    </div><!-- //row -->
    <div class="row">	 
        <!-- col -->
        <div class="col-50">
            
        </div><!-- //col -->

        <div class="col-50">
        <hr>
            <div class="row save-button-right">
                <div class="col">
                    <div class="form-group input-sliders borrar-guardar-btns">
                        <span class="msj-guardar"></span>
                        <button data-id="<?php echo $data['slider_id']; ?>" type="button" class="btn btn-primary btn-guardar">Guardar item</button>
                        <button data-id="<?php echo $data['slider_id']; ?>" type="button" class="btn btn-danger btn-xs btn-borrar">Borrar item</button>
                        
                    </div>
                </div><!-- //col -->
            </div><!-- //row -->
        </div><!-- //col -->

    </div><!-- //row -->
</li>