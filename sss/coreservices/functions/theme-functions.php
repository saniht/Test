<?php

	/*Render Page*/
	function renderPage(){

		//Get the theme
		$theme = setting('theme');

		//Check for the file
		if(file_exists('themes/' . $theme . '/' . TYPE . '.php')){

			//Include the default theme file
			include('themes/' . $theme . '/' . TYPE . '.php');

		} else{

			//Include the default theme files
			include('coreservices/theme-compat/' . TYPE . '.php');
		}
	}

	//List pages
	function listPages(){

		//Start list
		echo('<ul>');

		/*Get All pages*/
		$getpages = mysql_query("SELECT * FROM pages WHERE RANK < '$_SESSION[RANK]'");

		/*Collate Data*/
		while($pages = mysql_fetch_array($getpages)){

			echo('<li><a href="'.$pages['LINK'].'">'.$pages['NAME'].'</a></li>');
		}

		//End list
		echo('</ul>');
	}

	/*Page*/
	function page($row){

		if($row == 'title'){

			echo(NAME);
		} else if($row == 'content'){

			include('coreservices/pages/' . CONTENT);
		} else{

			echo('whoops! thats an error: ' . $row);
		}
	}

	/*Get Header*/
	function getHeader(){

		//Get the theme
		$theme = setting('theme');

		//Check for the file
		if(file_exists('themes/' . $theme . '/header.php')){

			//Include the theme files
			include('themes/' . $theme . '/header.php');

		} else{

			//Include the default theme files
			include('coreservices/theme-compat/header.php');
		}
	}

	/*Get Sidebar*/
	function getSidebar(){

		//Get the theme
		$theme = setting('theme');

		//Check for the file
		if(file_exists('themes/' . $theme . '/sidebar.php')){

			//Include the theme files
			include('themes/' . $theme . '/sidebar.php');

		} else{

			//Include the default theme files
			include('coreservices/theme-compat/sidebar.php');
		}
	}

	/*Get Footer*/
	function getFooter(){

		//Get the theme
		$theme = setting('theme');

		//Check for the file
		if(file_exists('themes/' . $theme . '/footer.php')){

			//Include the theme files
			include('themes/' . $theme . '/footer.php');
		} else{

			//Include the default theme files
			include('coreservices/theme-compat/footer.php');
		}
	}

	/*Get CSS*/
	function getCSS(){

		//Get the theme
		$theme = setting('theme');

		//Check for the file
		if(file_exists('themes/' . $theme . '/style.css')){

			echo('<link rel="stylesheet" href="'.'themes/' . $theme . '/style.css'.'" type="text/css" />');
		}
	}

	/*Header function*/
	function mtHead(){

		//Include nicedit scripts!
		echo('<script type="text/javascript" src="coreservices/editor/nicedit/nicEdit.js"></script>');

		//change all editors!
		echo('<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>');
	}

?>