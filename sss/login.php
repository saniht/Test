<?php

	/*Include Functions*/
	include('coreservices/functions.php');

	/*Include Config*/
	include('coreservices/config.php');

	/*Set Minimum Page Rank*/
	DEFINE('RANK', 'public');

	/*Set Page Name*/
	DEFINE('NAME', 'Login');

	/*Set Page Type*/
	DEFINE('TYPE', 'login');

	/*Sercurity Check*/
	sercurityCheck();

	/*Render page*/
	renderPage();

?>