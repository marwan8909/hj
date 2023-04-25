<?php
//api url filter
if(strpos($_SERVER['REQUEST_URI'],"DB.php")){
    require_once 'Utils.php';
    PlainDie();
}

$conn = new mysqli("localhost", "id19913661_user2", "@Pass35eae123", "id19913661_name2");
if($conn->connect_error != null){
    die($conn->connect_error);
}
