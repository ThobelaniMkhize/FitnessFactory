<?php

$con = mysql_connect("localhost","root","");
if(!$con)
{
    die('Could not connect:'. mysql_error());
}
/*echo 'Connection was successful!';*/
mysql_select_db("fitness", $con);

?>

