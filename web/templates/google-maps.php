<script>
    
var marcadores = [

<?php foreach ($data as $marcador ) { ?>
    
    [ '<?php echo $marcador["sucursal_titulo"]; ?>', <?php echo $marcador["sucursal_lat"]; ?>, <?php echo $marcador["sucursal_long"]; ?>, <?php echo $marcador["sucursal_id"]; ?> ],
        
<?php } ?>
    
    ];
    function initmap() {
        window.addEventListener('load', function(){
            
            cargarMapa();
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_API_KEY; ?>&callback=initmap" async defer></script>