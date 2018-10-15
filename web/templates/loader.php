<style>
    body {
        width: 100%;
    }
    #loader {
        position: fixed;
        z-index: 55;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /*overflow-y: scroll;*/
        /*background: gray;*/
    }
    #loader img {
        width: 100%;
        display: block;
        position: absolute;
        top: 0px;
        left: 0;
        z-index: 1;
    }

    .contenido {
        padding: 100px 10px;
    }

    .contenido p {
        color: red;
    }

    @media only screen and (max-width: 769px) {
        #loader img {
                width: 200%;
                margin-left: -50%;
            }
    }
</style>
<div id="loader">
        
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/14_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/14.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/13_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/13.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/12_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/12.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/11_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/11.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/10_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/10.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/09_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/09.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/08_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/08.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/07_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/07.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/06_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/06.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/05_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/05.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/04_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/04.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/03_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/03.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/02_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/02.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/01_1.png" class="loading-sequense">
    <img src="<?php echo MAINSURL; ?>/assets/images/loader/01.png" class="loading-sequense">
</div>
<script>
    var isloader = true;

</script>