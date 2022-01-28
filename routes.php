<?php 

$router->get("","controllers/index.php");
$router->get("about","controllers/aboutUs.php");
$router->get("about-colture","controllers/about-colture.php");
$router->get("contacts","controllers/contacts.php");
$router->get("done","controllers/index.php");

$router->post("add-new", "controllers/add-new.php");
