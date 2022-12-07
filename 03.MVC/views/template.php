<!DOCTYPEHTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Document </title>
	<?php
	include "modules/style.php"
	?>
</head>
	<?php
	include "modules/navegacion.php"
	?>
	<section>
	<?php
	$mvc =new MvcController;
	$mvc -> enlacesPaginasController();
	?>
	</section>
</html>	