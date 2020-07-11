<?php
chdir("..");
require "autoload.php";
require "modules/ulole/bootstrap/bootstrap.php";


if (php_sapi_name() == 'cli-server') {
    if (file_exists("./public/" . $_SERVER['REQUEST_URI']) && !is_dir("./public/" . $_SERVER['REQUEST_URI'])) 
        return false;
}

$router = new modules\deverm\Router;
require "app/routes.php";
$router->route();