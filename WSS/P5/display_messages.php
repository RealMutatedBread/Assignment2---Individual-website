<html>
<head>
    <title>Messages</title>
    </head>
<body>
    <h1> Guestbook</h1>
    <p>Click <a href="guestbook.html">here to return to the Guestbook.</a></p>
    <h3> Messages: </h3>
    
    <?php
$conn = @mysql_connect ("localhost", "root", "root") or die ("Sorry - unable to connect to MySQL database " );

$rs = @mysql_select_db ( "gbook", $conn ) or die ( "error" );

$mysql = "SELECT * FROM message";

$rs = mysql_query( $sql,$conn );

echo ("<table border='1'><tr><td><b>Name</b></td><td><b>Message</b></td></tr>" );

while ( $row =mysql_fetch_array($rs ) )
{
    echo ( "<tr><td>".$row["guestName"]. "</td><td>".$row["msg"]."</td></tr>" );
}
echo ( "</table>" );
?>
    </body>
</html>