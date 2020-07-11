<?php
namespace app\controller\testing;

use modules\deverm\Request;

class TestingController {
    /**
     * @modules\devermannotations\Route(route = "/get", method = "GET")
     */
    public static function get(){
        return [
            "args"=>$_GET,
            "headers"=>getallheaders(),
            "uri"=>Request::getRequestURI()
        ];
    }

    /**
     * @modules\devermannotations\Route(route = "/post", method = "POST")
     */
    public static function post(){
        return [
            "args"=>$_POST,
            "headers"=>getallheaders(),
            "uri"=>Request::getRequestURI()
        ];
    }

    /**
     * @modules\devermannotations\Route(route = "/delete", method = "DELETE")
     */
    public static function delete(){
        return [
            "headers"=>getallheaders(),
            "uri"=>Request::getRequestURI()
        ];
    }


}