<?php
namespace app\controller\client;

use modules\deverm\Request;
use models\mails\TrashMails;

class ClientController {
    /**
     * @modules\devermannotations\Route(route = "/client/ip", method = "GET")
     */
    public static function getIP(){
        return Request::getRemoteAddress();
    }

    /**
     * @modules\devermannotations\Route(route = "/client/useragent", method = "GET")
     */
    public static function getUserAgent(){
        return Request::getUserAgent();
    }

    /**
     * @modules\devermannotations\Route(route = "/client/acceptedlanguages", method = "GET")
     */
    public static function getAcceptedLanguages(){
        return Request::getAcceptedLanguages();
    }
}