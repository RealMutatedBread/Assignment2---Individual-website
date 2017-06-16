<?php
session_start();
if($_SESSION['login'] != "OK";
   {
       header('Location login.php');
       exit();
   }
?>
<html>
<head>
    <title>Logged In</title>
    </head>
    <body>
    <h1>Protected Web Page</h1>
        <?php
   echo "<p>You have successfully logged in.</p>"
   echo "<p>Your username: ";
   echo $_SESSION['username'];
   echo "<br/>";
   echo "Your password is: ";
   echo $_SESSION['password'];
   echo "</p>";
        ?>
    </body>
</html>