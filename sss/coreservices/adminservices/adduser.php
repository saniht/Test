<?php

	/*Include Functions*/
	include('../functions.php');

	/*Include Config*/
	include('../config.php');

	/*Set Minimum Page Rank*/
	DEFINE('RANK', '9');

	/*Set Page Name*/
	DEFINE('NAME', 'Adding User...');

	/*Set Page Type*/
	DEFINE('TYPE', 'index');

	/*Do Login*/
	addUser();

?>