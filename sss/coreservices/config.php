<?php

	/*Database HOST*/
	DEFINE('MT_DB_HOST', 'localhost');

	/*Database USERNAME*/
	DEFINE('MT_DB_USER', 'root');

	/*Database PASSWORD*/
	DEFINE('MT_DB_PASS', 'root');

	/*Database NAME*/
	DEFINE('MT_DB_NAME', 'smashingdbtest');

	/*Connect to DB*/
	mysql_connect(MT_DB_HOST, MT_DB_USER, MT_DB_PASS);

	/*Select DB*/
	mysql_select_db(MT_DB_NAME);

	/*Run DB Gen*/
	DBGEN();
	
	/*Start Session*/
	session_start();

?>