<?
include("../../xoslogin/include/session.php");
?>
<?php
$con = mysql_connect("localhost","root","8cEP4sttQ5g4");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("xosdata", $con);

mysql_query("UPDATE userdata
SET back = '7' 
WHERE user = '$session->username'");
{
echo "Successfully updated background to background 7. No Errors.";	
}

mysql_close($con);
?>