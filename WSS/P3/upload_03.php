<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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

			<!-- Banner -->
				<section id="main" class="container">
				<header>
					<h2>Image Uploader</h2>
					<p>Your image should now be online.</p>
				</header>
				<div class="box">
					<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
					<h3>Your Upload Information</h3>  
                    <?php
if (($_FILES["file"]["type"] == "image/png")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/gif") &&
        $_FILES["file"]["size"] < 500000)
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("images/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "images/" . $_FILES["file"]["name"]);
            echo "Saved as: " . "images/" . $_FILES["file"]["name"];
        }
    }
}
else
{
    if ($_FILES["file"]["type"] != "image/png")
        echo "File is not of the permitted type.";
    else if ($_FILES["file"]["size"] < 65536)
        echo "File is too large";
}
?>
				</div>
			</section>
	</body>
</html>