<?php 
$config = require "config.php";
$database= $config["database"];


$newTask = [
    "descrizione"=>$crypt->encrypt($_POST["descrizione"]),
    "terminata"=>"false"
];
//die(var_dump($newTask));
$query->insertTask($database["tableName"], $newTask);

$tasks = $query->selectAll($database["tableName"], $database["className"]);

require "views/index.view.php";

