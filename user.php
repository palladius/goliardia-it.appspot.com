<?php

// from http://stackoverflow.com/questions/17620667/how-to-construct-a-app-yaml-file

session_start();
date_default_timezone_set('America/Los_Angeles');

require_once 'google/appengine/api/users/UserService.php';

use google\appengine\api\users\User;
use google\appengine\api\users\UserService;

$user = UserService::getCurrentUser();
$name= $user->getNickname();
$name = explode(".",$name);
$name[0]= ucfirst($name[0]);
$name[1]= ucfirst($name[1]);
$name = $name[0]." ".$name[1];
$_SESSION['name']=$name;
$_SESSION['email']= getenv('USER_EMAIL');

header('Location: login.php');

