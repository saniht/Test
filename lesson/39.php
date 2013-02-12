<?header("Content-Type: text/html; charset=utf-8");?>
<?
// Создаем нового пользователя 
if(isset($_POST["send"])){
    $login =$_POST["login"];
    $psrd =$_POST["psrd"];
    // проверяем занят логин
    $dir =scandir(".");
       if(in_array($login, $dir))        echo 'Логин занят';
    else {
        echo 'создаем папки'; 
        mkdir($login);
        chdir($login);
        mkdir("video");
    }
}
// Удаление логина и всех папок
    function delAllFiles ($d){// применяем рекурсию для удаления всех файлов и подкаталогов пользователя
        $list = glob($d."/*");
        for ($i =0; $i < count($list);$i++){
            if(is_dir($list[$i])) delAllFiles ($list[$i]);
            else unlink ($list[$i]); 
        }
        rmdir($d);
    }
    // Проверка и удаления пользователя
if(isset($_GET["send1"])){
    $login1 =$_GET["login1"];
    $dir1 =scandir(".");
   
    if(in_array($login1, $dir1)){
        delAllFiles($login1);
        echo 'Пользователь удален';
    } 
 else     echo 'такого логина нет'; 
  
}
?>

<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Lesson 39</title>
    </head>
 <body>
     <form name ="myform" action ="39.php" method="post">
         <table>
             <tr>
                 <td>Логин:</td>
                 <td>
                     <input type="text" name="login"/>
                 </td>
             </tr>
             <tr>
                 <td>Пароль:</td>
                 <td>
                     <input type="text" name="psrd"/>
                 </td>
             </tr>
             <tr>                
                 <td>
                     <input type="submit" name="send" value="Отправить"/>
                 </td>
             </tr>
         </table>
             
             
     </form>
     <form name ="my" action ="39.php" method="get">
         <table>
             <tr>
                 <td>Логин:</td>
                 <td>
                     <input type="text" name="login1"/>
                 </td>
             </tr>             
             <tr>                
                 <td>
                     <input type="submit" name="send1" value="Удалить"/>
                 </td>
             </tr>
         </table>            
     </form>
     <p> </p>
 </body>
</html>

853