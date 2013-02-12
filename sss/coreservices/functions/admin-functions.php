<?php

	//Save settings
	function saveSettings(){

		//Common Setting
		$theme = setting('theme');

		//Update Settings
		mysql_query("UPDATE settings

			SET

			sitename = '$_POST[sitename]',
			sitedesc = '$_POST[sitedesc]',
			lessons = '$_POST[lessons]',
			theme = '$_POST[theme]'


			WHERE theme='$theme'")or die(mysql_error());

		//Redirect to settings page
		Header('Location: ../../settings.php');
	}

	//List users
	function listUsers(){

		//start list
		echo('<ul class="list">');

		//get all users
		$getusers = mysql_query("select * from users");

		//collate
		while($user = mysql_fetch_array($getusers)){

			echo('<li><a href=""><img class="profile-img" src="'.$user['image'].'"/>'.$user['fname'].' '.$user['lname'].'</a></li>');
		}

		//end list
		echo('</ul>');
	}
	
?>