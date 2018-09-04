<form method="POST" name="default-form" id="default-form">
    <div class="loader"></div>
    <div class="inner-wrapper-form">

        <div class="form-group">
            <input type="text" name="name" class="text-uppercase">
            <label for="name" class="text-uppercase">Tu nombre y apellido</label>
            <span class="msj-error-input">
                Este campo nos ayuda a comunicarnos
            </span>
        </div>

        <div class="form-group">
            <input type="number" name="year-trip">
            <label for="year-trip" class="">Año de viaje</label>
            <span class="msj-error-input">
                Debería escribir sólo números, no utilice separadores
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
            <input type="email" name="email" required>
            <label for="email">Email</label>
            <span class="msj-error-input">
                Formato de email inválido
            </span>
        </div>

        
        <button type="submit" class="btn-submit">Enviar</button>
        
        
    </div><!-- //.inner-wrapper-form -->
    <span class="msj-form"></span>
</form><!-- //default-form -->