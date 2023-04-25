<?php
$myhost = "localhost";
$myuser = "id19913661_user2";
$mypass = "@Pass35eae123";
$mydb = "id19913661_name2";
$key = "2147828743"; //Don't touch this !
$yoursiteurl = "http://localhost";

$con = mysqli_connect($myhost, $myuser, $mypass, $mydb);



if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
