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

    public static function all(){
        return (new User)
            ->select()
            ->get();
    }

    public static function byID($id){
        return (new User)
            ->select()
            ->where("id", $id)
            ->first();
    }

}