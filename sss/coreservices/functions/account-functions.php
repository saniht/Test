<?php

	/*Sercurity Check*/
	function sercurityCheck(){

		/*Check for userid variable*/
		if(isset($_SESSION['USERID'])){

			if($_SESSION['RANK'] < RANK){

				Header("Location: index.php");
			} else{

				//User is logged in  & there rank is sufficient, no need for redirect!
			}

		} else if(RANK == 'public'){

			//No action is required, the page is public!
		} else{

			/*Ensue that no other data is sitll on the server*/
			session_destroy();

			/*Redirect User*/
			header("Location: login.php");
		}
	}

	/*Do Login*/
	function doLogin(){

		/*Set MD5 Password*/
		$_POST['password'] = md5($_POST['password']);

		/*Get The User From DB*/
		$getuser = mysql_query("SELECT * FROM users WHERE username='$_POST[username]' AND password='$_POST[password]'");

		/*Check number of 'users'*/
		if(mysql_num_rows($getuser) == 1){

			//The user exists - collate the data
			while($user = mysql_fetch_array($getuser)){

				$_SESSION['USERID'] = $user['ID'];

				$_SESSION['RANK'] = $user['RANK'];

				$_SESSION['WIDTH'] = '100%';

				Header('Location: ../../index.php');
			}
		}
	}

	//Add user
	function addUser(){

		//Check if the user exists...
		$getallusers = mysql_query("select * from users where username='$_POST[username]'");

		//Check for match
		if(mysql_num_rows($getallusers) == 1){

			//Redirect
			Header('Location: ../../users.php');
		} else{

			//Hash the password
			$_POST['password'] = md5($_POST['password']);

			//Make the user!
			mysql_query("INSERT INTO users (username, password, fname, lname, rank)
			VALUES ('$_POST[username]', '$_POST[password]', '$_POST[fname]', '$_POST[lname]', $_POST[RANK])") or die(mysql_error());

			//Redirect
			Header('Location: ../../users.php');
		}
	}










?>