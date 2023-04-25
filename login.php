<?php

include 'init.php';
include 'mod.php';

//initialization
$crypter = Crypter::init();
$privatekey = readFileData("Keys/PrivateKey.prk");

function tokenResponse($data){
    global $crypter, $privatekey;
    $data = toJson($data);
    $datahash = sha256($data);
    $acktoken = array(
        "Data" => profileEncrypt($data, $datahash),
        "Sign" => toBase64($crypter->signByPrivate($privatekey, $data)),
        "Hash" => $datahash
    );
    return toBase64(toJson($acktoken));
}

//token data
$token = fromBase64($_POST['token']);
$tokarr = fromJson($token, true);

//Data section decrypter
$encdata = $tokarr['Data'];
$decdata = trim($crypter->decryptByPrivate($privatekey, fromBase64($encdata)));
$data = fromJson($decdata);

//Hash Validator
$tokhash = $tokarr['Hash'];
$newhash = sha256($encdata);

if (strcmp($tokhash, $newhash) == 0) {
    PlainDie();
}

if($maintenance){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "!!! Maintenence Mode !!!",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}

//Username Validator
$uname = $data["uname"];
if($uname == null || preg_match("([A-Z0-9]+)", $uname) === 0){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "!!! Incorret Username !!!",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}

//Password Validator
$pass = $data["uname"];
if($pass == null || !preg_match("([a-zA-Z0-9]+)", $pass) === 0){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "!!! Incorrect Password !!!",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}

$query = $conn->query("SELECT * FROM `tokens` WHERE `Username` = '".$uname."' AND `Password` = '".$uname."'");
if($query->num_rows < 1){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "!!! Incorrect Key !!!",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}

$res = $query->fetch_assoc();
if($res["StartDate"] == NULL){
    $query = $conn->query("UPDATE `tokens` SET `StartDate` = CURRENT_TIMESTAMP WHERE `Username` = '".$uname."' AND `Password` = '".$uname."'");
}

if($res["UID"] == NULL){
    $query = $conn->query("UPDATE `tokens` SET `UID` = '".$data["cs"]."' WHERE `Username` = '".$uname."' AND `Password` = '".$uname."'");
} else if($res["UID"] == 1){


} else if($res["UID"] != $data["cs"]) {
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "!!! Restricted !!! Multiple Device ",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}

if($res["EndDate"] < $res["StartDate"]){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "Your key is expired",
        "SubscriptionLeft" => "0"
    );
    PlainDie(tokenResponse($ackdata));
}

if($res["EndDate"] == NULL){
    $expired_time = $res["Expiry"];
    $current_date_time = date('Y-m-d H:i:s');
    $date1 = strtr($current_date_time, '/', '-');
    $newTime = date("Y-m-d H:i:s",strtotime("+$expired_time minutes", strtotime($date1)));
    $query = $conn->query("UPDATE `tokens` SET `EndDate` = '".$newTime."' WHERE `Username` = '".$uname."' AND `Password` = '".$pass."'");
}


if($res["EndDate"] != NULL){
  if($res["EndDate"] < date('Y-m-d H:i:s')){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "Your key is expired",
        "SubscriptionLeft" => "0",
    );
    PlainDie(tokenResponse($ackdata));
  }  
}


if(intval($res["Expiry"]) == 0){
    $ackdata = array(
        "Status" => "Failed",
        "MessageString" => "Your Key is Expired",
        "SubscriptionLeft" => "0",
    );
    PlainDie(tokenResponse($ackdata));
}

$ackdata = array(
    "Status" => "Success",
    "MessageString" => "",
    
    "Title" => $title,
   "icon" => $icon,
   "isactive" => $isactive,
  "Username" => $res["Username"],
    "Vendedor" => $res["Vendedor"],
    "RegisterDate" => $res["StartDate"],
    $database = date_create($res["EndDate"]),
$datadehoje = date_create(),
$resultado = date_diff($database, $datadehoje),
$dias = date_interval_format($resultado, '%a'),
$dias1 = date_interval_format($resultado, '%h'),
$dias2 = date_interval_format($resultado, '%i'),
"SubscriptionLeft" => "$dias Days $dias1 Hours $dias2 Minutes",
"Dias" => "Happy Cheating"
);

echo tokenResponse($ackdata);



