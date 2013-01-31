<?header("Content-Type: text/html; charset=utf-8");?>
<?php

// Убираем имейлы с текста

$text = "Всем привет! mysite@site.ru, пишите мне на почту mysite@site.ru";
function relaseEmail ($text){
    $reg = "/[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i";
    return preg_replace($reg, "<b> тут был е-mail</b>", $text);
}
$regs = "//";
echo relaseEmail($text);
?>
