<?php
require_once "upload_class.php";
//echo 'PRIVET';
class UploadMysik extends Upload {
    
    protected $dir = "mysik";
    protected $mime_types = array ("audio/mpeg");

}
?>
