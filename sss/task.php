<?php

	/*Include Functions*/
	include('coreservices/functions.php');

	/*Include Config*/
	include('coreservices/config.php');

	/*Set Minimum Page Rank*/
	DEFINE('RANK', '1');

	/*Set Page Name*/
	DEFINE('NAME', 'Homework Task');

	/*Set Page Type*/
	DEFINE('TYPE', 'index');

	/*Set Page Content*/
	DEFINE('CONTENT', 'task.php');

	/*Sercurity Check*/
	sercurityCheck();

	/*Render Page*/
	renderPage();

?>