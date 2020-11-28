<?php
ob_start();
session_start();
$current_file = basename($_SERVER["SCRIPT_FILENAME"], '.php');



function checkAdminPermission(){
    
}

$page_title = "";


$type = "";



if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
	$http_referer = $_SERVER['HTTP_REFERER'];
}

function loggedin(){
	if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
		return true;
	} else{
		return false;
	}
}


function getfield($field){
    require ('inc/dbconnect.php');
    $query = "SELECT `$field` `id`,`email` FROM `doctorsprofile` WHERE `email` = '".$_SESSION['email']."'";
    if($query_run = mysqli_query($conn, $query)){

            $row = mysqli_fetch_array($query_run);

            $mysql_result = $row[$field];

        return $mysql_result;
    }
} 

function message($type, $mymessage){
        return "<div class=\"alert alert-".$type."\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        ".$mymessage."</div>";  
}

$admin = "14";


?>