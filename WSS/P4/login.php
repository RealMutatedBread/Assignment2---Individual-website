<!DOCTYPE HTML>
<html>
	<head>
		<title>Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">
			<!-- Header -->
				<header id="header" class="skel-layers-fixed">
					<h1><a href="index.html">Web Server Scripting</a> by Calvin Wakefield</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Criteria</a>
								<ul>
                                    <li><a href="screen.html">P2 - System Checker</a></li>
									<li><a href="upload_01.html">P3 - File Upload</a></li>
									<li><a href="login.php">P4 - Login</a></li>
								</ul>
							</li>
							<li><a href="login.php" class="button">Login</a></li>
						</ul>
					</nav>
				</header>
<?php
  $user = "";
  $pass = "";
  $validated = false;

  if ($_POST)
  {
    $user = $_POST['username'];
    $pass = $_POST['password'];
  }

  session_start();
  if($user!=""&&$pass!="")
  {
    if($user=="jsmith"&&$pass=="letmein") $validated = true;
    if($validated)
    {
      $_SESSION['login'] = "OK";
      $_SESSION['username'] = $user;
      $_SESSION['password'] = $pass;
      header('Location: protected.php');
    }
    else
    {
      $_SESSION['login'] = "";
      echo "Invalid username or password.";
    }
  }
  else $_SESSION['login'] = "";
?>

<html>
<head>
    <title>Test</title>
    </head>
    
    <body>
    <h1>Login Page</h1>
        <p> Please enter your details.</p>
        <form action="login.php" method="post">
        <table>
            <tr>
            <td align="right">Username: </td> 
                <td><input size=\"20\"type="text" size="20" maxlength="15" name="username"></td>
            </tr>
                        <tr>
            <td align="right">Password: </td> 
                <td><input size=\"20\" type="password" size="20" maxlength="15" name="password"></td>
            </tr>
            <tr>
            <td></td>
                <td colspan="2" align="left"><input type="submit" value="Login"></td>
            </tr>
            </table>
        </form>
    </body>
</html>