<p align="center"><img src="https://cdn.interaapps.de/ulole/icons/ulole1.svg" width="200"><br>Ulole-Framework Version 2 ALPHA</p>



# Ulole Framework 2 (ALPHA)

## Based on
- [ulole-core](https://github.com/interaapps/ulole-core)
- [ulole-orm](https://github.com/interaapps/ulole-orm)
- [deverm router](https://github.com/interaapps/deverm)
- [helper](https://github.com/uppm/helper)

```php
<?php
namespace app\controller;

class WelcomeController {
    /**
     * Hello world page
     * 
     * @return string
     */
    public static function about() {
        return "Hello world!";
    }
}
```

`This is just the development version. If we are ready soon there is a new version! :D`

## Installation
Currently there is no installation method for ulole-frameworkv v2
```bash
php uppm.php install
```

Update Packages:
```bash
php uppm update
```

## Features
- Useful CLI with custom commands support (php cli)
- Build in TestServer (php cli server)
- Database ORM (Multi DB Support, Multible SQL server types usable)
- Database Migration-Tool
- Template Engine
- Ulole Modules
- A Router
- Template Engine
- CSS and JS Combinder
- Easy MultiLanguagesupport implementation
- Object-oriented
- Sessionmanager
- Useful utils
- Fast
- Little folder size (1.4 MB [In version 1.0.28])

#### Controller
```php
<?php
namespace app\controller;

class AboutController {
    /**
     * Hello world page
     * 
     * @return string
     */
    public static function about() {
        return "Hello world!";
    }
}
```

#### Orm
```php
<?php
namespace models;

use modules\uloleorm\Table;

class User extends Table {
    
    public $id;
    public $username;
    public $password;

    public function __construct(){
        // DATABASE IN env.json
        $this->setDatabase("main");
        // TABLE NAME
        $this->setTable("user");
    }

}
```

#### Migration
```php
<?php
namespace databases\migrate;

use modules\uloleorm\migrate\Migrate;

class UserTable extends Migrate {
    public function database() {
        $this->create('user', function($table) {
            $table->int("id")->ai();
            $table->string("username");
            $table->string("password", 155);
        });
    }
}
```

#### Debug
![https://i.imgur.com/W8otsxK.png](https://i.imgur.com/W8otsxK.png)

## UPPM-Modules 

#### DevermAnnotations
`php uppm.php install devermannotations`
```php

// controller/TestingController.php
class TestingController {
    /**
     * @modules\devermannotations\Route(route = "/hi", method = "GET")
     */
    public static function hello(){
        echo "HIII";
    }
}

// routes.php
use modules\devermannotations\DevermAnnotations;
use app\controller\TestingController;

$deverm = new DevermAnnotations($router);
$deverm->addClass(TestingController::class);
$deverm->init();
```

#### PHP-HttpClient
`php uppm.php install httprequest`
```php
use modules\httprequest\HttpRequest;

// Simple GET-Request
$res = HttpRequest::get("https://interaapps.de")->send();

$res->getData(); // Gets the body
$res->getCode(); // Gets the httpcode
// ...

// POST-Request with params
$res = HttpRequest::post("https://interaapps.de")
        ->parameter("username", "homer.simpson")
        ->parameter("password", "ilovedonuts")
        ->send();
```

#### GitClient
`php uppm.php install gitclient`
```php
use modules\gitclient\Git;

$git = new Git();

$git->changeDirectory(".");
$git->initIfNot();
$git->setRemote("origin");
$git->add(".");
$git->commit("Hello, this push has been sent with the GitPHPClient by UPPM");
$git->push("master");
```