<?php
include 'DB.php';
include 'Global.php';
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['resellerid'])) {
	header('Location: verification.php');
	exit;
}


if($maintenance == false){
     $conn->query("UPDATE tokens SET UID=NULL WHERE `Username` = '".$_GET['no']."'");   
}

?>

<script type="text/javascript">
	alert("Reset Successful");
	window.location.href='dashboard.php';
</script>