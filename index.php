<?php

$query = require "./core/bootstrap.php";
$router = new router();
session_start();
require "routes.php";


require $router::load('routes.php')
->direct(Request::uri(), Request::method());