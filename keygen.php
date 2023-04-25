<?php
include 'DB.php';
include 'Global.php';
include 'Auth.php';
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: verification.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
         
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">     
  	    <link href="assets/style.css" rel="stylesheet" type="text/css">	    
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Panel
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="dashboard.php" class="simple-text logo-normal">
         Master Admin Panel
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          
          <li class="nav-item ">
            <a class="nav-link" href="./admininfo.php">
              <i class="material-icons">person</i>
              <p>Resellers Info</p>
            </a>
          </li>
          <li class="nav-item ">
              <li class="nav-item active  ">
            <a class="nav-link" href="./keygen.php">
              <i class="material-icons">mode_edit_outline</i>
              <p>Generate Key</p>
            </a>
            </li>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./adminkey.php">
              <i class="material-icons">create_new_folder</i>
              <p>Register Reseller</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./profile.php">
              <i class="material-icons">sentiment_satisfied_alt</i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./settings.php">
              <i class="material-icons">construction</i>
              <p>Settings</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      
     
      
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="keygen.php">Key Generator</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                
                   
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">4</span>
                  <p class="d-lg-none d-md-block">
                    new notification
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">New user rajesh added</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="profile.php">Profile</a>
                  <a class="dropdown-item" href="settings.php">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="verification.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      	
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         
          <div class="content">
        <div class="container-fluid">
          <div class="row">
            
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Total Keys generated</h4>
                  <p class="card-category"> Here is details about each key</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                      
                    <html>
                   <div class="login">
		
			     	<form  method="post">
				</label>
				 <h4 >Select Expiration date....</h4>          
                    <div class="login2">
                        	
						<select style="margin:auto; width:175px; margin-bottom: 0px" class="form-control" name="exp">
                       <option value="1">1 Days</option>
                       <option value="2">2 Days</option>
                        <option value="3">7 Days</option>
                        <option value="4">30 Days</option>
                        <option value="5">2 Hours Trial</option>
                        
                      </select>
	            	</div>
				<div class="login3">
				    </div>
					
				</label>
				    <h4 >Select Quantity Of Keys....</h4>          
                    <div class="login2">
                        	
						<select style="margin:auto; width:175px; margin-bottom: 0px" class="form-control" name="loopcount">
                        <option value="1">1 </option>
                        <option value="2">3 </option>
                        <option value="3">10 </option>
                        <option value="4">50 </option>
                       
                      </select>
	            	</div>
                        
                        
                      </select>
			<input id="submit" name="register" type="submit" class="ui fluid green button" value="Generate">
			
				<?php
      {
         echo "<td> <a href='dashboard.php'><button type='button' class='btn btn-success'>Back to dashboard</button></a> </td>";
      }


      ?>    
			</form>
		</div>
		
		
			<p>Key Validity: <?=$_SESSION['idd']?> Days</p>
		<p>Key: <?=$_SESSION['userr']?></p>
		
		
		<?php
      {
         echo "<td> <a href='cpy.php'><button type='button' class='btn btn-success'>Key Copy Area</button></a> </td>";
      }


      ?>    
            
            
            
<?php 
if (isset($_POST['register'])) {
$loopcount =  xss_clean(mysqli_real_escape_string($con, $_POST['loopcount']));
$exp =  xss_clean(mysqli_real_escape_string($con, $_POST['exp']));


if ($loopcount == "1"){
  $loopcount = 1;
}
else if ($loopcount == "2"){
  $loopcount = 3;
  
}
else if ($loopcount == "3"){
  $loopcount = 10;
  
}
else if ($loopcount == "4"){
  $loopcount = 50;
  
}

else{
  echo "<div style=\"margin:auto;margin-top:10px;width:970px;\" class=\"ui negative message\">
                    <p>Invalid token type!</p>
                </div>";
  die();
}
if ($exp == "1"){
  $exp = 1440;
  $exppp = 1;
  
 for($i = 0; $i < $loopcount; $i++){
$tok = Owner;
$tokennn = GenerateToken1();
$date_1_hora = date('Y-m-d H:i', strtotime('-4 Hours'));
$date      = $date_1_hora;//date("Y/m/d/h/m");
$Expiration = $_POST['email'];
session_regenerate_id();
		$_SESSION['showkey'] = TRUE;
		$_SESSION['userr'] = $tokennn;
		
		$_SESSION['idd'] = $exppp;

$insertlol = mysqli_query($con, "INSERT INTO `tokens` (Username, Expiry, Vendedor, Password, UID, StartDate, EndDate, Created, Type) 
  VALUES ('$tokennn', '$exp', '$tok', '$tokennn', null, null, null, '$date', '$exppp')") or die(mysqli_error($con));
    }
if ($insertlol){
  echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key Generated! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
}
else{
  echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui negative message\">
                    <p>Error!</p>
                </div>";
}

  
  
  
}
else if ($exp == "2"){
  $exp = 2880;
  $exppp = 2;
  
  for($i = 0; $i < $loopcount; $i++){
$tok = Owner;
$tokennn = GenerateToken11();
$date_1_hora = date('Y-m-d H:i', strtotime('-4 Hours'));
$date      = $date_1_hora;//date("Y/m/d/h/m");
$Expiration = $_POST['email'];
session_regenerate_id();
		$_SESSION['showkey'] = TRUE;
		$_SESSION['userr'] = $tokennn;
		
		$_SESSION['idd'] = $exppp;

$insertlol = mysqli_query($con, "INSERT INTO `tokens` (Username, Expiry, Vendedor, Password, UID, StartDate, EndDate, Created, Type) 
  VALUES ('$tokennn', '$exp', '$tok', '$tokennn', null, null, null, '$date', '$exppp')") or die(mysqli_error($con));
    }
if ($insertlol){
  echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key Generated! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
}
else{
  echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui negative message\">
                    <p>Error!</p>
                </div>";
}

  
  
}


else if ($exp == "3"){
  $exp = 10080;
  $exppp = 7;
  
  for($i = 0; $i < $loopcount; $i++){
$tok = Owner;
$tokennn = GenerateToken2();
$date_1_hora = date('Y-m-d H:i', strtotime('-4 Hours'));
$date      = $date_1_hora;//date("Y/m/d/h/m");
$Expiration = $_POST['email'];
session_regenerate_id();
		$_SESSION['showkey'] = TRUE;
		$_SESSION['userr'] = $tokennn;
		
		$_SESSION['idd'] = $exppp;

$insertlol = mysqli_query($con, "INSERT INTO `tokens` (Username, Expiry, Vendedor, Password, UID, StartDate, EndDate, Created, Type) 
  VALUES ('$tokennn', '$exp', '$tok', '$tokennn', null, null, null, '$date', '$exppp')") or die(mysqli_error($con));
    }
if ($insertlol){
  echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key Generated! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
}
else{
  echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui negative message\">
                    <p>Error!</p>
                </div>";
}

  
  
}
else if ($exp == "4"){
  $exp = 43200;
  $exppp = 30;
  
  for($i = 0; $i < $loopcount; $i++){
$tok = Owner;
$tokennn = GenerateToken3();
$date_1_hora = date('Y-m-d H:i', strtotime('-4 Hours'));
$date      = $date_1_hora;//date("Y/m/d/h/m");
$Expiration = $_POST['email'];
session_regenerate_id();
		$_SESSION['showkey'] = TRUE;
		$_SESSION['userr'] = $tokennn;
		
		$_SESSION['idd'] = $exppp;

$insertlol = mysqli_query($con, "INSERT INTO `tokens` (Username, Expiry, Vendedor, Password, UID, StartDate, EndDate, Created, Type) 
  VALUES ('$tokennn', '$exp', '$tok', '$tokennn', null, null, null, '$date', '$exppp')") or die(mysqli_error($con));
    }
if ($insertlol){
  echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key Generated! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
}
else{
  echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui negative message\">
                    <p>Error!</p>
                </div>";
}

  
}
else if ($exp == "5"){
  $exp = 120;
  $exppp = 0.2;
  
  for($i = 0; $i < $loopcount; $i++){
$tok = Owner;
$tokennn = GenerateToken();
$date_1_hora = date('Y-m-d H:i', strtotime('-4 Hours'));
$date      = $date_1_hora;//date("Y/m/d/h/m");
$Expiration = $_POST['email'];
session_regenerate_id();
		$_SESSION['showkey'] = TRUE;
		$_SESSION['userr'] = $tokennn;
		
		$_SESSION['idd'] = $exppp;

$insertlol = mysqli_query($con, "INSERT INTO `tokens` (Username, Expiry, Vendedor, Password, UID, StartDate, EndDate, Created, Type) 
  VALUES ('$tokennn', '$exp', '$tok', '$tokennn', null, null, null, '$date', '$exppp')") or die(mysqli_error($con));
    }
if ($insertlol){
  echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key Generated! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
}
else{
  echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui negative message\">
                    <p>Error!</p>
                </div>";
}

  
}
else{
  echo "<div style=\"margin:auto;margin-top:10px;width:970px;\" class=\"ui negative message\">
                    <p>Invalid token type</p>
                </div>";
  die();
}

 

}
  


function GenerateToken() {
    for($i = 0; $i < 1; $i++) {
        $usee = $_SESSION['name'];
      $randomString = "BOSS2H-";
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      for ($i = 0; $i < 12; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }
  }
function GenerateToken1() {
    for($i = 0; $i < 1; $i++) {
        $usee = $_SESSION['name'];
      $randomString = "BOSS1D-";
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      for ($i = 0; $i < 12; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }
  }
  function GenerateToken11() {
    for($i = 0; $i < 1; $i++) {
        $usee = $_SESSION['name'];
      $randomString = "BOSS2D-";
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      for ($i = 0; $i < 12; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }
  }
 function GenerateToken2() {
    for($i = 0; $i < 1; $i++) {
        $usee = $_SESSION['name'];
      $randomString = "BOSS7D-";
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      for ($i = 0; $i < 12; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }
  }
 function GenerateToken3() {
     $usee = $_SESSION['name'];
    for($i = 0; $i < 1; $i++) {
      $randomString = "BOSS30D-";
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      for ($i = 0; $i < 12; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }
  }
?>


<?php
function xss_clean($data)
  {
    // Fix &entity\n;
    $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
    $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
    $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
    $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

    // Remove any attribute starting with "on" or xmlns
    $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

    // Remove javascript: and vbscript: protocols
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

    // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

    // Remove namespaced elements (we do not need them)
    $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

    do
    {
      // Remove really unwanted tags
      $old_data = $data;
      $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
    }
    while ($old_data !== $data);

    // we are done...
    return $data;
  }
?>
</html>   
                     
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div id="registration-form">
	<div class='fieldset'>
        </div>
        </div>
      </div>
      
    </div>
  </div>
  <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright float-right">
           
            <script>
             
            </script>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  
  
</body>

</html>