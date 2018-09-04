<?php
/*
 * PAGE TEMPLATE: PAGINA INICIO
 * es el html de la pagina de inicio
*/

include 'header.php';

$sliders = getSliders('home'); 
    if ( $sliders != null ) {
        getTemplate( 'slider-home', $sliders );
    }
?>


<?php echo PAGEACTUAL; ?>

<?php include 'footer.php'; ?>