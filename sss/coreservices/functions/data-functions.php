<?php

	//Setting
	function setting($row){

		//Get all settings
		$getsettings = mysql_query("select * from settings");

		//Collate data
		while($setting = mysql_fetch_array($getsettings)){

			//Return the setting
			return($setting[$row]);
		}

		
	}

	//DB GEN
	function DBGEN(){

		//Create users table
		mysql_query("CREATE TABLE IF NOT EXISTS users 
		(
		ID int NOT NULL AUTO_INCREMENT, 
		PRIMARY KEY(ID),
		fname varchar(300),
		lname varchar(300),
		username varchar(300),
		password varchar(300),
		teacher varchar(300),
		prefix varchar(300),
		image varchar(300),
		staffcode varchar(300),
		RANK int
		)") or die(mysql_error());

		//Create timetable table
		mysql_query("CREATE TABLE IF NOT EXISTS timetable 
		(
		ID int NOT NULL AUTO_INCREMENT, 
		PRIMARY KEY(ID),
		day varchar(300),
		period varchar(300),
		lesson varchar(300),
		USERID int,
		teacher int
		)") or die(mysql_error());

		//Create settings table
		mysql_query("CREATE TABLE IF NOT EXISTS settings 
		(
		sitename varchar(300),
		sitedesc varchar(300),
		theme varchar(300),
		lessons int,
		URL varchar(300)
		)") or die(mysql_error());

		//Create subjects table
		mysql_query("CREATE TABLE IF NOT EXISTS subjects 
		(
		ID int NOT NULL AUTO_INCREMENT, 
		PRIMARY KEY(ID),
		name varchar(300),
		description varchar(300),
		owner int
		)") or die(mysql_error());

		//Create pages table
		mysql_query("CREATE TABLE IF NOT EXISTS pages 
		(
		ID int NOT NULL AUTO_INCREMENT, 
		PRIMARY KEY(ID),
		NAME varchar(300),
		LINK varchar(300),
		RANK int
		)") or die(mysql_error());

		//Create homework table
		mysql_query("CREATE TABLE IF NOT EXISTS homework 
		(
		ID int NOT NULL AUTO_INCREMENT, 
		PRIMARY KEY(ID),
		title varchar(300),
		type varchar(300),
		content text,
		class int
		)") or die(mysql_error());

		//Create enroll table
		mysql_query("CREATE TABLE IF NOT EXISTS enroll 
		(
		ID int NOT NULL AUTO_INCREMENT, 
		PRIMARY KEY(ID),
		class int,
		user int
		)") or die(mysql_error());

		//Create classes table
		mysql_query("CREATE TABLE IF NOT EXISTS classes 
		(
		ID int NOT NULL AUTO_INCREMENT, 
		PRIMARY KEY(ID),
		name varchar(300),
		description varchar(500),
		teahcer int,
		lesson int
		)") or die(mysql_error());

		//Add some smaple data!
		$settings = mysql_query("select * from settings");

		//check rows
		if(mysql_num_rows($settings) == 0){

			mysql_query("INSERT INTO settings (sitename, sitedesc, theme)
			VALUES ('Smashing LMS', 'Just another smashing LMS Site', 'clean')");
		}

		//Add some smaple data!
		$settings = mysql_query("select * from users");

		//check rows
		if(mysql_num_rows($settings) == 0){

			mysql_query("INSERT INTO users (username, password, fname, lname, rank)
			VALUES ('admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin', 'User', 10)");
		}

		//Add some smaple data!
		$settings = mysql_query("select * from pages");

		//check rows
		if(mysql_num_rows($settings) == 0){

			mysql_query("INSERT INTO pages (LINK, NAME, RANK)
			VALUES ('index.php', 'Dashboard', 1)");

			mysql_query("INSERT INTO pages (LINK, NAME, RANK)
			VALUES ('subjects.php', 'Subjects', 1)");

			mysql_query("INSERT INTO pages (LINK, NAME, RANK)
			VALUES ('settings.php', 'Settings', 9)");

			mysql_query("INSERT INTO pages (LINK, NAME, RANK)
			VALUES ('notebook.php', 'My Notebook', 1)");

			mysql_query("INSERT INTO pages (LINK, NAME, RANK)
			VALUES ('users.php', 'Users', 1)");

			mysql_query("INSERT INTO pages (LINK, NAME, RANK, ID)
			VALUES ('logout.php', 'Logout', 1, 100)");
		}

	}

?>























