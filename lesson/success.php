<?php
//session_cache_limiter("public");
//session_start();
header("Content-Type: text/html; charset=utf-8");
if($_GET["send"]==1){
    echo "Ваше сщщбщение успешно отправлено на".$_SESSION["to"];
    echo "<br/> <a href='322.php'>Вернутся</a>";
    
}

?>
