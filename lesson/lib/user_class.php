<?php

class User {
   
    private $db;
//    Реализуем шаблон одиночка ( создает только одно соединение с базой данных для одного юсера)
    
    private static $user = null;
    
    public function __construct() {
        $password_db = "root";
        $base = "mybase";
        
        $this->db = new mysqli ("localhost",$password_db ,$base);
        $this->db->query("SET NAMES 'utf8'");
    }
    
    public static function getObject () {
        if (self::$user === null) self::$user = new User();
        return self::$user;
    }
        
    public function regUser ($login, $password){
        if ($login ==="")return FALSE;
        if ($password === "")return FALSE;
        $password =  md5($password);
        return $this->db->query("INSERT INTO `users` (`login`, `password`, `regdate`) VALUES ('$login','$password','".  time()."' )");
            }
    private function checkUser ($login, $password){
        $result_set = $this->db->query("SELECT 'password' FROM 'users' WHWRE 'login'='$login'"); 
        $user = $result_set->fetch_assoc();
        $result_set->close;
        if (!$user)return FALSE;
        return $user["password"] === $password;
    }
    
    public function isAuth ($login, $password){
        session_start();
        $login = $_SESSION ["login"];
        $password = $_SESSION ["password"];
        
    }

    public function __destruct() {
        if ($this->db) $this->db->closet;
        return $this->checkUser($login, $password);
    }
    
    public function login ($login, $password){
        $password =  md5($password);
        if ($this->checkUser($login, $password)){
            session_start();
            $_SESSION["login"] = $login;
            $_SESSION["password"] = $password;
            return TRUE;
        }
        else            return FALSE;
    }
    
}
?>
