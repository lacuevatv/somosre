<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php
	SeoTitlePage( PAGEACTUAL );
	getHeaderMetaInfo( PAGEACTUAL );
	
	getStyles(PAGEACTUAL, array('default', 'owlcarousel'));
	?>

</head>

<body data-page="<?php echo PAGEACTUAL; ?>">	
<div class="main-wrapper">
	
	<?php openPopUp( PAGEACTUAL ); ?>
	
	<div class="inner-wrapper">
		<header>
			header
		</header>