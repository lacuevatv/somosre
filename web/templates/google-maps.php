<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_API_KEY; ?>&callback=cargarMapa" async defer></script>

<script>
var marcadores = [

<?php foreach ($data as $marcador ) { ?>
    
    [ '<?php echo $marcador["sucursal_titulo"]; ?>', <?php echo $marcador["sucursal_lat"]; ?>, <?php echo $marcador["sucursal_long"]; ?>, <?php echo $marcador["sucursal_id"]; ?> ],
        
<?php } ?>
    
    ];
</script>
