<?php

	/*Include Functions*/
	include('coreservices/functions.php');

	/*Include Config*/
	include('coreservices/config.php');

	/*Set Minimum Page Rank*/
	DEFINE('RANK', '0');

	/*Set Page Name*/
	DEFINE('NAME', 'Dashboard');

	/*Set Page Type*/
	DEFINE('TYPE', 'index');

	/*Set Page Content*/
	DEFINE('CONTENT', 'dashboard.php');

	/*Sercurity Check*/
	sercurityCheck();

	/*Render Page*/
	renderPage();

?>