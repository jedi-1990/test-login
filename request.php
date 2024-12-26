<?php 
session_start();

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

// Check if request is login
if($_GET["request"]=="login"){
    // Require database class
	require_once('Database.class.php');
    // Get config
	$config = require_once('config.php');
    // Connect database
	$db = new Database($config['database']);

    // Check user email and password in database
	$posts = $db->query("SELECT * FROM users WHERE email=:email AND password=:password",[
		'email'=>$_GET["email"],
        'password'=>md5($_GET["password"])
	])->fetch();

	if($posts){
        $_SESSION["login"] = '1';
        echo 'login';
    }else{
        echo 'error';
    }
}

// check if request is logout
if($_GET["request"]=="logout"){
    unset($_SESSION["login"]);
}