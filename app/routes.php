<?php
$viewsDirectory    = "resources/views/";
$templateDirectory = "resources/views/templates/";

$router->get("/", "homepage.php");
$router->get("/example", "!ExampleController@example");
$router->get("/example/users", "!ExampleController@exampleJSONAPI");
$router->post("/example/users", "!ExampleController@addUser");

$router->setPageNotFound("404.php");

use app\controller\testing\TestingController;
use modules\devermannotations\DevermAnnotations;

$deverm = new DevermAnnotations($router);
$deverm->addClass(\app\controller\mails\trashmail\TrashMailAPIController::class);
$deverm->addClass(\app\controller\client\ClientController::class);
$deverm->addClass(TestingController::class);
$deverm->init();

// Initializing the directories
$router->setDirectories($viewsDirectory, $templateDirectory);