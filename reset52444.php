<?php
include 'DB.php';
include 'Global.php';

$humm = $_POST['username'];
if($maintenance == false){
     $conn->query("UPDATE tokens SET UID=NULL WHERE `Username` = '$humm'");   
}

?>

<script type="text/javascript">
	alert("Key Reset Successful");
	window.location.href='reset54888.php';
</script>