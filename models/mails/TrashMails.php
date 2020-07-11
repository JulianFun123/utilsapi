<?php
namespace models\mails;

use modules\uloleorm\Table;

class TrashMails extends Table {
    
    public $id;
    public $mail_domains;
    public $created;

    public function __construct(){
        // DATABASE IN env.json
        $this->setDatabase("main");
        // TABLE NAME
        $this->setTable("trashmails");
    }

    public static function all(){
        return (new User)
            ->select()
            ->get();
    }

}