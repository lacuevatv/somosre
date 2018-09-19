<button class="btn-share<?php if ( isset($data['color']) && $data['color'] == 'blanco' ) {echo ' btn-share-blanco'; } ?>">
    <span class="sr-only">Compartir</span>

    <span data-red="facebook" class="share-item share-item-blanco">
        F
    </span>
    <span data-red="twitter" class="share-item share-item-blanco share-item1">
        T
    </span>
    <?php if (dispositivo() == 'movil' ) : ?>
    <span data-red="whatsapp" class="share-item share-item-blanco share-item2">
        W
    </span>
    <?php endif; ?>
</button>