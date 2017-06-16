<html>
<head>
<title>Guestbook</title>
</head>
<body>
<h1>Guest Book</h1>
<?php
$name = $_POST['name'];
$message = $_POST['message'];
$conn = @mysql_connect ( "localhost", "root", "root")or die (mysql_error());
$rs = @mysql_select_db ( "gbook", $conn ) or die (mysql_error());
$sql = "INSERT INTO message(guestName, msg) VALUES ('$name','$message')";
$rs = mysql_query( $sql, $conn ) or die (mysql_error());
?>
<p>Message successfully saved.</p>
<p>Click <a href="guestbook.html">here</a> to return to Guestbook.</p>

</body>

</html>