<?php

	/*Include Functions*/
	include('coreservices/functions.php');

	/*Include Config*/
	include('coreservices/config.php');

	/*Set Minimum Page Rank*/
	DEFINE('RANK', 'public');

	/*Set Page Name*/
	DEFINE('NAME', 'Logout');

	/*Set Page Type*/
	DEFINE('TYPE', 'login');

	/*Destroy Session Data*/
	session_destroy();

	/*Redirect to login*/
	Header('Location: login.php');

?>