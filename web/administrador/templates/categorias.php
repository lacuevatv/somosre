<?php
global $userStatus;
if ($userStatus != '0' && $userStatus != '1' ) {
	echo 'No tiene permisos para ver esta sección';
  	
  	exit;
}
?>
<div class="contenido-modulo">
	<h1 class="titulo-modulo">
		Categorías
	</h1>
	<div class="container">
		<div class="row">
            <div class="col-20">
                <table class="tabla-categorias">
                    <thead>
                        <tr>
                            <td>Agregar nueva</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form name="nueva-categoria-form" id="nueva-categoria-form" method="POST">
                                    <div class="form-group">
                                        <label for="nombre_nueva_categoria">Nombre</label>
                                        <input type="text" name="nombre_nueva_categoria">
                                    
                                        <label for="slug_nueva_categoria">slug</label>
                                        <input type="text" name="slug_nueva_categoria">
                                    </div>

                                    <div class="form-group">
                                        <select name="tipo_nueva_categoria">
                                            <option value="galerias">Galerias</option>
                                            <option value="celebrities">Celebrities</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-add-category">
                                        Agregar Nueva categoria
                                    </button>

                                    <span class="error-msj"></span>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
			<div class="col-80">

                <table class="tabla-categorias">
                    <thead>
                        <tr>
                            <td>
                                Categorias
                            </td>
                            <td>
                                Tipo
                            </td>
                            <td>
                            </td>
                        </tr>
                    </thead>
                    <tbody class="categorias-wrapper categorias">

                    <?php 
                    $categorias = getCategoryList( );

                    if ($categorias != null ) {
                    
                        foreach ($categorias as $categoria ) { ?>

                        <tr>
                            <td>
                                <input type="hidden" name="categoria_id" value="<?php echo $categoria['categoria_id']; ?>">
                                <input type="hidden" name="categoria_slug" value="<?php echo $categoria['categoria_slug']; ?>">
                                <input type="text" name="categoria_name" value="<?php echo $categoria['categoria_nombre']; ?>">
                            </td>
                            <td>
                                <?php echo $categoria['categoria_tipo']; ?>
                            </td>
                            <td>
                                <button data-id="<?php echo $categoria['categoria_id']; ?>" class="btn btn-primary btn-sm btn-change-category">
                                    Guardar
                                </button>
                                <button data-id="<?php echo $categoria['categoria_id']; ?>" class="btn btn-danger btn-sm btn-del-category">
                                    Borrar
                                </button>
                                <span class="error-msj"></span>
                            </td>
                        </tr>

                        <?php }
                    } ?>
                    </tbody>
                </table>

            </div><!-- // col -->

            

        </div><!-- // row gral modulo -->
	</div><!-- // container gral modulo -->
</div><!-- // wrapper interno modulo -->
<div id="dialog"></div>
<!-- botones del modulo -->
<footer class="footer-modulo container">
    <a type="button" href="index.php" class="btn">Volver al inicio</a>
</footer>