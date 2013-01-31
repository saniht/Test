<?header("Content-Type: text/html; charset=utf-8");?>
<?php
/*Групирующие скобки*/

$reg = "/(\d{2})-(\d{2})-(\d{4})/";
echo preg_match($reg, "10-02-1995")."<br/>";// возвращает 1

// также можно поместить данные найденные с помощью регулярного выражения в масив дл последующего их использования
//помещаем в масив с помощю функции preg_match_all
preg_match_all($reg, "01-02-1955", $subject);
print_r($subject);
echo "<br/>";
echo $subject [3][0];//выводим из масива год
echo "<br/>";
if (isset($_POST["send"])){
    $mail = $_POST["mail"];
    $reg1 = "/^\w([\.\w+])*\w@\w((\.\w)*\w+)*\.\w{2,3}$/";
    echo preg_match($reg1, $mail)."<br/>";
  echo $mail;  
}

?>
<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Lesson 315</title>
    </head>
 <body>
     <form name ="myform" action ="315.php" method="post">
         <table>
             <tr>
                 <td>email:</td>
                 <td>
                     <input type="text" name="mail"/>
                 </td>
             </tr>                 
             <tr>                
                 <td>
                     <input type="submit" name="send" value="Отправить"/>
                 </td>
             </tr>   
         </table> 
     </form>
     
 </body>
</html>