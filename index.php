<?php

$query = require "./core/bootstrap.php";
$router = new router();
session_start();
if(!isset($_SESSION['crypt'])){
    $_SESSION['crypt'] = new Crypt();
}
$crypt = $_SESSION['crypt'];
require "routes.php";


require $router::load('routes.php')
->direct(Request::uri(), Request::method());