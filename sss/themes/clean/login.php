<html>

	<head>

		<title>Login | <?php echo(setting('sitename')); ?></title>

	</head>

	<style>

		*{

			padding: 0px;
			margin: 0px;
		}

		body{

			font:12px 'Helvetica', arial;
			background:#eee;
		}

		#login{

			margin:70px auto;
			border:1px solid #ccc;
			border-radius: 3px;
			width: 320px;
			background:#fff;
		}

		h1{

			font:15px 'Helvetica', arial;
			font-weight: bold;
			padding: 10px;
			border-bottom:1px solid #ccc;
			color:#333;
		}

		/*FORM STUFF*/
		label{

			display: block;
			padding-top: 10px;
			padding-bottom: 10px;
			color: #444;
		}

		form{

			margin-right:14px;
			padding: 10px;
		}

		form *{

			outline: 0px !important;
		}

		input[type="text"],
		input[type="password"],
		input[type="number"],
		textarea,
		select{

			width: 100%;
			padding:5px;
			border:1px solid #ccc;
			font:12px arial;
			outline: 0px !important;
			background:#fff !important;
			border-radius: 2px;
			-webkit-transition:0.4s all ease-in-out;
			-moz-transition:0.4s all ease-in-out;
			transition:0.4s all ease-in-out;
			-o-transition:0.4s all ease-in-out;
		}

		input[type="text"]:focus,
		textarea:focus,
		input[type="number"]:focus,
		input[type="password"]:focus,
		select:focus{

			border:1px solid #336699;
		}

		input[type="submit"],
		.button{

			background:#336699;
			text-decoration:none;
			display:inline-block;
			margin-top:10px;
			padding:5px 10px 5px 10px;
			border:1px solid #336699;
			color:#fff;
			border-radius: 2px;
			-webkit-transition:0.4s all ease-in-out;
			-moz-transition:0.4s all ease-in-out;
			transition:0.4s all ease-in-out;
			-o-transition:0.4s all ease-in-out;
		}

	</style>

	<body>

		<div id="login">

			<h1><?php echo(setting('sitename')); ?></h1>

			<form action="coreservices/loginservices/login.php" method="POST">

				<label for="username">Username</label>

				<input type="text" name="username" />

				<label for="password">Password</label>

				<input type="password" name="password" />

				<input type="submit" name="login" value="Login" />

			</form>

		</div>

	</body>

</html>