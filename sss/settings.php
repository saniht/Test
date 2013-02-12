<?php

	/*Include Functions*/
	include('coreservices/functions.php');

	/*Include Config*/
	include('coreservices/config.php');

	/*Set Minimum Page Rank*/
	DEFINE('RANK', '9');

	/*Set Page Name*/
	DEFINE('NAME', 'Settings');

	/*Set Page Type*/
	DEFINE('TYPE', 'index');

	/*Set Page Content*/
	DEFINE('CONTENT', 'settings.php');

	/*Sercurity Check*/
	sercurityCheck();

	/*Render Page*/
	renderPage();

?>