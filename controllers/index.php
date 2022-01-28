<?php 

$config = require "config.php";
$database= $config["database"];
if(isset($_GET['id'])){
    $query->doneTask($_GET['id']);
}

$tasks = $query->selectAll($database["tableName"], $database["className"]);
require "views/index.view.php";
