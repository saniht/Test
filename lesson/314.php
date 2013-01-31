<?php
$str = "Something string 123 string";

$reg ="/th/";
echo preg_match($reg, $str)."<br/>";

$reg ="/S.m/";
echo preg_match($reg, $str)."<br/>";

$reg ="/S.t/";
echo preg_match($reg, $str)."<br/>";

/*Символы классы*/

$reg ="/\sab\Scd\w\W\d ab \D/";
echo preg_match($reg, "\nab9cd9/0 ab X/")."<br/>"; //строка соответствует данному регулярному выражению

/*Альтернативы*/

$reg ="/a[012]b/"; // альтернатива указана в скобках [ЛЮБОЙ СИМВОЛ ИЗ ПЕРЕЧИСЛЕНЫХ]
echo preg_match($reg, "a0b")."<br/>"; //строка соответствует данному регулярному выражению

$reg ="/a[0-9]b/"; // задаем интервал возможных вариантов
echo preg_match($reg, "a0b")."<br/>";

/*ОТРИЦАНИЯ*/
$reg ="/a[^012]b/";// ^ знак отрицания

/*Вывод спецсимволов*/


?>
