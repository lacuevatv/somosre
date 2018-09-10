<form method="POST" name="default-form" id="default-form">
    <div class="loader"></div>

    <legend>
        Completa tus datos para concretar tu entrevista.
    </legend>
    <div class="inner-wrapper-form">

        <div class="form-group">
            <input type="text" name="name" class="text-uppercase">
            <label for="name" class="text-uppercase">Nombre y Apellido</label>
            <span class="msj-error-input">
                Este campo nos ayuda a comunicarnos
            </span>
        </div>

        <div class="form-group">
            <input type="email" name="email" required>
            <label for="email">Email</label>
            <span class="msj-error-input">
                Formato de email inválido
            </span>
        </div>

        <div class="form-group">
            <input type="number" name="tel">
            <label for="tel">Teléfono Movil</label>
            <span class="msj-error-input">
                El teléfono es necesario para comunicarnos (no use separadores)
            </span>
        </div>
        
        <div class="form-group">
            <input type="number" name="tel">
            <label for="tel">Teléfono</label>
            <span class="msj-error-input">
                El teléfono es necesario para comunicarnos (no use separadores)
            </span>
        </div>

        <div class="form-group">
            <select name="provincia">
                <option value=""></option>
                <?php 
                $provincias = array(
                    'slug' => '',
                    'nombre' => '',
                );
                foreach ($provincias as $provincia) {
                    echo '<option value="'.$provincia['slug'].'">'.$provincia['nombre'].'</option>';
                }
                ?>
            </select>
            <label for="provincia" class="">Colegio</label>
            <span class="msj-error-input">
                Nombre del Colegio donde cursa
            </span>
        </div>

        <div class="form-group">
            <input type="text" name="ciudad">
            <label for="ciudad" class="">Ciudad</label>
            <span class="msj-error-input">
                Ciudad donde habita
            </span>
        </div>

        <div class="form-group">
            <input type="date" name="fecha_nacimiento">
            <label for="fecha_nacimiento" class="">Fecha de Nacimiento</label>
            <span class="msj-error-input">
                Ponga una fecha válida
            </span>
        </div>

        <div class="form-group">
            <input type="text" name="ciudad">
            <label for="ciudad" class="">¿Cómo llegaste a nosotros?</label>
            <span class="msj-error-input">
                Este dato nos ayuda mucho
            </span>
        </div>

        

        <legend>
            Completa tus datos para concretar tu entrevista.
        </legend>

        <div class="form-group">
            <input type="text" name="name" class="text-uppercase">
            <label for="name" class="text-uppercase">Nombre y Apellido</label>
            <span class="msj-error-input">
                Este campo nos ayuda a comunicarnos
            </span>
        </div>

        <div class="form-group">
            <input type="email" name="email" required>
            <label for="email">Email</label>
            <span class="msj-error-input">
                Formato de email inválido
            </span>
        </div>

        <div class="form-group">
            <input type="number" name="tel">
            <label for="tel">Teléfono</label>
            <span class="msj-error-input">
                El teléfono es necesario para comunicarnos (no use separadores)
            </span>
        </div>

        <div class="form-group">
            <input type="text" name="ciudad">
            <label for="ciudad" class="">Horario de contacto</label>
            <span class="msj-error-input">
                Este dato nos ayuda a comunicarnos
            </span>
        </div>

        <button type="submit" class="btn-submit">Enviar</button>
        
        
    </div><!-- //.inner-wrapper-form -->
    <span class="msj-form"></span>
</form><!-- //default-form -->