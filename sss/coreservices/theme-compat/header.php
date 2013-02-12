<!DOCTYPE HTML>

<html>

	<head>

		<title><?php echo(NAME); ?> | <?php echo(setting('sitename')); ?></title>

		<?php getCSS(); ?>

		<?php mtHead(); ?>

	</head>

	<body>

		<div id="wrapper">

			<div id="header">

				<h1><a href="index.php"><?php echo(setting('sitename')); ?></a></h1>
				<p><i><?php echo(setting('sitedesc')); ?></i></p>

			</div>

			<div id="navbar">

				<?php listPages(); ?>

			</div>