<?php
include 'DB.php';
include 'Global.php';
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}


?>


<?php
require_once 'init.php';
?>
	<?php
      {
         echo "<td> <a href='keygen.php'><button type='button' class='btn btn-success'>Back to dashboard</button></a> </td>";
      }


      ?>    


<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min82ed.css">
    <link rel="stylesheet" href="assets/css/styles.minaa01.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron" style="margin: 1px;">
			<div class="alert alert-success status" role="alert" style="background-color: rgb(249,249,249);margin: 50px 0 0 0;">
                <h1 style="font-size: 30px;">Keys Copy Area</h1>
				<?php
				    $exppp = 10080;
					$query = $conn->query("SELECT * FROM `tokens` ORDER BY id DESC");
					if($query->num_rows < 1){
						echo '<p class="status-item"><strong>No Free Keys Available</strong></p>';
					} else {
						$res = $query->fetch_all(MYSQLI_ASSOC);
						for ($i = 0; $i < $query->num_rows; $i++) {
							echo '<p class="status-item"><strong>ID : ' . $res[$i]["id"] ." <br>KEY: " . $res[$i]["Username"] . "</strong></p> ";
						}
					}
				?>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min0392.js"></script>
    <script src="assets/bootstrap/js/bootstrap.mine98d.js"></script>
</body>
</html>