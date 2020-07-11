<?php
namespace app\controller;

use models\User;
use modules\helper\security\Hash;

class ExampleController {
    public static function example(){
        return "Hello world!";
    }

    public static function exampleJSONAPI(){
        return [
            "user_count"=>4,
            "users"=>[
                "John"=>"john@test.interaapps.de",
                "Tom"=>"tom@test.interaapps.de",
                "Justin"=>"justin@test.interaapps.de",
                "Justine"=>"justine@test.interaapps.de"
            ]
        ];
    }

    public static function addUser(){
        $user = new User;
        $user->username = "HELLO";
        $user->password = Hash::passwordHash("WORLD");
        $user->save();
        
        return [
            "id"=>10001
        ];
    }
}