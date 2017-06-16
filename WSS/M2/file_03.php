<!DOCTYPE html>
<html>
<body>
    <?php
$myFile=fopen("mydata.tx","r") or exit("Can't open file!");
    // Read and display each line of text until the end of the file is reached
    while(!feof($myFile))
    {
    echo fgets("myFile") . "<br>";
    }
    
    fclose($myFile);
    ?>
</body>
</html>
