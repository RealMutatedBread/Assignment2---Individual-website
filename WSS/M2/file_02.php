<!DOCTYPE html>
<html>
<body>
<?php
$myFile=fopen("mdata.txt","r") or exi("Can't open file!");
// Read display each line of text until the end of the file is reached
while(!feof($myFile))
{
    echo gets($myFile) . "<br>";
    )
        fclose($myFile);
    ?>
</body>
</html>
