<?php

	/*Include Functions*/
	include('../functions.php');

	/*Include Config*/
	include('../config.php');

	/*Set Minimum Page Rank*/
	DEFINE('RANK', '0');

	/*Set Page Name*/
	DEFINE('NAME', 'Logging In...');

	/*Set Page Type*/
	DEFINE('TYPE', 'index');

	/*Do Login*/
	doLogin();

?>