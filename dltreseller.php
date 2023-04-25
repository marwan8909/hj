<?php
include 'DB.php';
include 'Global.php';

if($maintenance == false){
     $conn->query("DELETE FROM `admin_profile` WHERE `email` = '".$_GET['no']."'");   
}

?>

<script type="text/javascript">
	alert("Rseller successfully removed");
	window.location.href='admininfo.php';
</script>