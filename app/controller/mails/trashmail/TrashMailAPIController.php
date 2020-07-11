<?php
namespace app\controller\mails\trashmail;

use models\mails\TrashMails;

class TrashMailAPIController {
    /**
     * @modules\devermannotations\Route(route = "/mails/trashmails/istrashmail", method = "GET")
     */
    public static function isTrashMail(){

        $out = ["found"=>false];
        
        if (isset($_GET["mail"])) {

            $domain = "";

            if (strpos($_GET["mail"], "@") !== false) {
                $parts = explode("@", $_GET["mail"]);
                $domain = $parts[1];
            } else {
                $domain = $_GET["mail"];
            }

            $out["found"] = (new TrashMails)->select("id")->where("mail_domains", $domain)->first()["id"] !== null;
        }
        
        return $out;
    }
}