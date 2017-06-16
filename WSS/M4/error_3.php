<?php
function customError($errno, $errstr)
{
echo "<b>Error:</b> [$errno] $errstr<br />";
echo "Terminating script";
die();
}
set_error_handler("customError",E_USER_WARNING);
$myvar=2;
if ($myvar>1)
{
trigger_error("Value must be 1 or less", E_USER_WARNING);
}
?>