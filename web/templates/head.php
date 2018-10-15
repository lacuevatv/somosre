<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php
		SeoTitlePage( PAGEACTUAL );
		getHeaderMetaInfo( PAGEACTUAL );
	?>
	
	<!--FAVICON -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo MAINSURL; ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo MAINSURL; ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo MAINSURL; ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo MAINSURL; ?>/site.webmanifest">
	<link rel="mask-icon" href="<?php echo MAINSURL; ?>/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

	<?php getStyles(PAGEACTUAL, array('default', 'owlcarousel')); ?>

</head>

<body data-page="<?php echo PAGEACTUAL; ?>">	

<?php if ( PAGEACTUAL == 'inicio' && dispositivo() == 'pc' ) : 
	getTemplate('loader'); 
endif; ?>

<div class="main-wrapper">
	
	<?php openPopUp( PAGEACTUAL ); ?>

	<?php getTemplate('header-nav'); ?>

	<div class="inner-wrapper">