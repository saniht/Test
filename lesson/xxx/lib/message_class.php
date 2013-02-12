<?php

require_once "globallmessage_class.php";

class Message extends GlobalMessage {
    
    public function __construct() {
        parent::__construct("messages");  
    }
}

?>
