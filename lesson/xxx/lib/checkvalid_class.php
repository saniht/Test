<?php

require_once "config_class.php";

class CheckValid {
    
    private $config;
    
    public function __construct() {
        $this->config = new Config();
    }
    
    public function validID ($id){
        if (!$this->isIntNumber ($id)) return FALSE;
        if ($id <= 0) return FALSE;
        return TRUE;
    }
    
    public function validLogin ($login){
        if ($this->isContainQuotes($login))return FALSE;
        if (preg_match("/^\d*$/", $login))return FALSE;
        return $this->validString($login, $this->config->min_login, $this->config->max_login);
    }

    public function validHash ($hash){
        if (!$this->vilidString($hash, 32, 32))return FALSE;
        if (!$this->isonlyLettersAndDigits($hash))return FALSE;
        return TRUE;
        
        
    }
    
    public function validTimeSamp ($time){
        return $this->isNoNegativeInteger($time);
    }
    
        private function isIntNumber ($number) {
        if (!is_int ($number) && (!is_string($number)))  return FALSE;
        if (!preg_match("/^-?(([1-9][0-9]*|0))$/", $number)) return FALSE;
        return TRUE;
    }
    
    private function isNoNegativeInteger ($number){
        if (!$this->isIntNumber($number)) return FALSE;
        if ($number < 0)return FALSE;
        return TRUE;
    }
    
    private function isonlyLettersAndDigits ($string){
       if (!is_int($string) && (!is_string($string)))return FALSE; 
       if (!preg_match("/[a-za-z0-9]*/i",$string))return FALSE; 
       return TRUE;
    }

    private function vilidString ($string, $min_length, $max_length){
        if (!is_string($string))            return FALSE;
        if (strlen($string)< $min_length) return FALSE;
        if (strlen($string)> $max_length) return FALSE;
        return TRUE;
    }

    

    private function isContainQuotes ($string){
        $array = array ("\"", "'", "`", "&quot;", "&apos;");
        foreach ($array as $key =>$value){
            if (strpos ($string, $value) !== FALSE)return TRUE;
            return FALSE;
        }
    }
    }
?>
