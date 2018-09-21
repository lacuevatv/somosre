<form method="POST" name="default-form" id="default-form" class="formulario">
    <div class="loader"></div>

    <legend class="parrafo-separador animate-element slide-left">
        Completa tus datos para concretar tu entrevista.
    </legend>

    <div class="inner-wrapper-form">
        <button class="btn btn-facebook animate-element slide-left" style="animation-delay:0.5s">Completar con</button>
        <button class="btn btn-google animate-element slide-left" style="animation-delay:0.7s">Completar con</button>
    </div>

    <div class="inner-wrapper-form">

        <div class="form-row animate-element slide-left">

            <div class="form-group">
                <input type="text" name="contacto_nombre" class="input-default text-uppercase" required>
                <label for="contacto_nombre" class="text-uppercase">Nombre y Apellido</label>
                <span class="msj-error-input">
                    Este campo nos ayuda a comunicarnos
                </span>
            </div>

            <div class="form-group">
                <input type="email" name="contacto_email" class="input-default" required>
                <label for="contacto_email">Email</label>
                <span class="msj-error-input">
                    Formato de email inválido
                </span>
            </div>

            <div class="form-group">
                <input type="number" name="contacto_celular" class="input-default">
                <label for="contacto_celular">Teléfono Movil</label>
                <span class="msj-error-input">
                    El teléfono es necesario para comunicarnos (no use separadores)
                </span>
            </div>     

            <div class="form-group">
                <input type="number" name="contacto_telefono" class="input-default">
                <label for="contacto_telefono">Teléfono</label>
                <span class="msj-error-input">
                    El teléfono es necesario para comunicarnos (no use separadores)
                </span>
            </div>

            <div class="form-group">
                <input type="text" name="contacto_colegio" class="input-default">
                <label for="contacto_colegio">Colegio</label>
                <span class="msj-error-input">
                    Colegio donde cursa
                </span>
            </div>

            <div class="form-group">
                <select name="contacto_provincia">
                    <option value=""></option>
                    <?php 
                    global $provincias;
                    foreach ($provincias as $provincia) {
                        echo '<option value="'.$provincia['slug'].'">'.$provincia['nombre'].'</option>';
                    }
                    ?>
                </select>
                <label for="contacto_provincia">Provincia</label>
                <span class="msj-error-input">
                    Seleccione una provincia
                </span>
            </div>

            <div class="form-group">
                <input type="text" name="contacto_ciudad" class="input-default">
                <label for="contacto_ciudad" class="">Ciudad</label>
                <span class="msj-error-input">
                    Ciudad donde habita
                </span>
            </div>

            <div class="form-group">
                <input type="date" name="contacto_nacimiento" class="input-default">
                <label for="contacto_nacimiento" class="">Fecha de Nacimiento</label>
                <span class="msj-error-input">
                    Ponga una fecha válida
                </span>
            </div>

            <div class="form-group">
                <input type="text" name="contacto_como_llegaste" class="input-default">
                <label for="contacto_como_llegaste" class="como">¿Cómo llegaste a nosotros?</label>
                <span class="msj-error-input">
                    Este dato nos ayuda mucho
                </span>
            </div>
        
        </div>
    </div>

    <hr class="hr-separador">
    
    <legend class="parrafo-separador animate-element slide-left">
        Completa los datos de un adulto responsable.
    </legend>

    <div class="inner-wrapper-form inner-wrapper-form-sm">
        
        <div class="form-row animate-element slide-left">

            <div class="form-group">
                <input type="text" name="contacto_adulto_nombre" class="text-uppercase input-default">
                <label for="contacto_adulto_nombre" class="text-uppercase">Nombre y Apellido</label>
                <span class="msj-error-input">
                    Este campo nos ayuda a comunicarnos
                </span>
            </div>

            <div class="form-group">
                <input type="email" name="contacto_adulto_email" class="input-default">
                <label for="contacto_adulto_email">Email</label>
                <span class="msj-error-input">
                    Formato de email inválido
                </span>
            </div>
        
        </div>
        <div class="form-row animate-element slide-left">
    
            <div class="form-group">
                <input type="number" name="contacto_adulto_telefono" class="input-default">
                <label for="contacto_adulto_telefono">Teléfono</label>
                <span class="msj-error-input">
                    El teléfono es necesario para comunicarnos (no use separadores)
                </span>
            </div>

            <div class="form-group">
                <input type="text" name="contacto_adulto_horario" class="input-default">
                <label for="contacto_adulto_horario" class="">Horario de contacto</label>
                <span class="msj-error-input">
                    Este dato nos ayuda a comunicarnos
                </span>
            </div>
        
        </div>

    </div><!-- //.inner-wrapper-form -->

    <div class="inner-wrapper-form animate-element slide-left">
        <button type="submit" class="btn btn-amarillo btn-submit">Enviar datos</button>
        <span class="msj-form"></span>
    </div>

</form><!-- //default-form -->