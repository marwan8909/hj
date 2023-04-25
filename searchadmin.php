<?php
include 'DB.php';
include 'Global.php';
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: verification.php');
	exit;
}






?>


<html lang="en">

<head>
  <meta charset="utf-8" />
  <link href="style.css" rel="stylesheet" type="text/css">
   <link href="style2.css" rel="stylesheet" type="text/css">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
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
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Admin Pannel
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./admininfo.php">
              <i class="material-icons">person</i>
              <p>Admin Info</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./keygen.php">
              <i class="material-icons">mode_edit_outline</i>
              <p>Generate Key</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./adminkey.php">
              <i class="material-icons">create_new_folder</i>
              <p>Create Admin</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./profile.php">
              <i class="material-icons">sentiment_satisfied_alt</i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
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
            <a class="navbar-brand" href="dashboard.php">Dashboard</a>
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
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">vpn_key</i>
                  </div>
                  <p class="card-category">Total keys</p>
                  <h3 class="card-title">
                  <?php 
                  $sql12 = "SELECT COUNT(*) FROM tokens";
                  $resulto = mysqli_query($conn,$sql12);
                  $rows1 = mysqli_fetch_row($resulto);
                    echo $rows1[0];
                     ?>
                    <small>Keys</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-secondary">add</i>
                    <a href="tables.php">Generate more keys...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">account_circle</i>
                  </div>
                  <p class="card-category">Total Admins</p>
                  <h3 class="card-title"> <?php 
                  $sql12 = "SELECT COUNT(*) FROM admin_profile";
                  $resulto = mysqli_query($conn,$sql12);
                  $rows1 = mysqli_fetch_row($resulto);
                    echo $rows1[0];
                     ?>
                    <small>Admin</small></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-secondary">add</i>
                    <a href="tables.php">Add Admin...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">home_repair_service</i>
                  </div>
                  <p class="card-category">maintenance</p>
                  <h3 class="card-title"> 
                    <small>False</small></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-secondary">edit</i>
                    <a href="settings.php">Change status...</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="content">
        <div class="container-fluid">
          <div class="row">
            
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Total Keys generated</h4>
                  <p class="card-category"> Here is details about each key</p>
                </div>
                <div class="card-body">
                  
                    
                     
 
              </div>
              </nav> 
              </div>
            </div>
          </div>
          <div class="content">
        <div class="container-fluid">

 

 <form method="GET" action="search.php">
  <input type="text" placeholder="search by username:" name="search"/>
  <input type="submit" value="Search">
  </form>
  
  
  
            <form action="dashboard.php" method="post">
            <?php if (isset($_GET['msg'])) { ?>
            <p class="alert alert-success"><?php echo $_GET['msg']; ?></p>
            <?php } ?>
                 
                  <?php
// mysql connection
$hostname = "localhost";
$username = "modpakp9_vip";
$password = "lsS(O&)GAaoz";
$dbname = "modpakp9_bossmod";

$con = mysqli_connect($hostname, $username, $password, $dbname) or die("Error: " . mysqli_error($con));

if(isset($_GET['searchreseller']))


$key=$_GET["search"];  //key=pattern to be searched




// fetch records
$result = @mysqli_query($conn,"select * from `tokens` where `Vendedor` like '%$key%'") or die("Error: " . mysqli_error($con));

// delete records

if(isset($_POST['det'])){
        
if(isset($_POST['chk_id']))
{
    $arr = $_POST['chk_id'];
    foreach ($arr as $id) {
        @mysqli_query($con,"DELETE FROM tokens WHERE id = " . $id);
    }
    
   echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key deleted! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
   
    
 }
}

if(isset($_POST['ret'])){
        
if(isset($_POST['chk_id']))
{
    $arr = $_POST['chk_id'];
    foreach ($arr as $id) {
        @mysqli_query($con,"UPDATE tokens SET UID=NULL WHERE id = " . $id);
    }
    echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key UID Reset Successful! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
}
}

if(isset($_POST['addd'])){
        
if(isset($_POST['chk_id']))
{
    $arr = $_POST['chk_id'];
    
    foreach ($arr as $id) {
        
        $sql = "SELECT * FROM tokens WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
   $date2 = $dados['EndDate'];
       $mod_date = strtotime($date2."+ 1 days");
$adicionardias = date("Y/m/d h:m",$mod_date); 
        
        
        @mysqli_query($con,"UPDATE tokens SET EndDate='$adicionardias' WHERE id = " . $id);
    }
    echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key Day Extend Successful! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
}
}
if(isset($_POST['addd2'])){
        
if(isset($_POST['chk_id']))
{
    $arr = $_POST['chk_id'];
    
    foreach ($arr as $id) {
        
        $sql = "SELECT * FROM tokens WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
   $date2 = $dados['EndDate'];
       $mod_date = strtotime($date2."+ 7 days");
$adicionardias = date("Y/m/d h:m",$mod_date); 
        
        
        @mysqli_query($con,"UPDATE tokens SET EndDate='$adicionardias' WHERE id = " . $id);
    }
    echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key Day Extend Successful! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
}
}
if(isset($_POST['addd3'])){
        
if(isset($_POST['chk_id']))
{
    $arr = $_POST['chk_id'];
    
    foreach ($arr as $id) {
        
        $sql = "SELECT * FROM tokens WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
   $date2 = $dados['EndDate'];
       $mod_date = strtotime($date2."+ 30 days");
$adicionardias = date("Y/m/d h:m",$mod_date); 
        
        
        @mysqli_query($con,"UPDATE tokens SET EndDate='$adicionardias' WHERE id = " . $id);
    }
    
    echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key Day Extend Successful! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
}
}
?>
                 
                 
            
       
              
         
          

             
                      
                  <input id="submit" name="det" type="submit" class='btn btn-danger' value="Delete"/>
                   <input id="submit" name="ret" type="submit" class='btn btn-Success' value="Reset"/>
                   <input id="submit" name="addd" type="submit" class='btn btn-Success' value="+1"/>
                   <input id="submit" name="addd2" type="submit" class='btn btn-Success' value="+7"/>
                   <input id="submit" name="addd3" type="submit" class='btn btn-Success' value="+30"/>
               
               
               
               
               
               
               
               
              
           <div class="table-responsive">
            <table class="table">
                <thead>
                    
                    
                    <tr>
                    <th><input id="chk_all" name="chk_all" type="checkbox"  /></th>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Keys</th>
                    <th>Type</th>
                    <th>Status</th>
                     <th>Device ID</th>
                    <th>Generated date</th>
                    <th>Expiry Date</th>
                     
                    
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                     
                    <td><input name="chk_id[]" type="checkbox" class='chkbox' value="<?php echo $row['id']; ?>"/></td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Username']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    <td><?php echo $row['Vendedor']; ?></td>
                    <td><?php echo $row['Expiry']; ?>days</td>
                    <td><?php if($row['StartDate'] > $row['EndDate']) echo "Expired"; else { echo "Active";} ?></td>
                    <td><?php echo $date2 = $row['UID'];?></td>
                    <td><?php echo $date2 = $row['Created'];?></td>
	            	<td><?php echo $date2 = $row['EndDate'];?></td>
	            	
	            	
	            
                </tr>
                <?php } ?>
                </tbody>
            </table>
            
            
            </form>
                  
                     
                     
                     
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
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