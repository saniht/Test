<?header("Content-Type: text/html; charset=utf-8");?>
<?
if(isset($_POST["send"])){
    $login =$_POST["login"];
    $psrd =$_POST["psrd"];
    $dir =scandir(".");
    print_r($dir);
    if(in_array($login, $dir))        echo 'Логин занят';
    else {
        echo 'создаем папки'; 
        mkdir($login);
        chdir($login);
        mkdir("video");
    }
}

if(isset($_GET["send1"])){
    $login1 =$_GET["login1"];
    echo 'yspeh';
    $dir1 =scandir(".");
    print_r($dir1);
    function delAllFiles ($d){
        $list = glob($d."/*");
        for ($i =0; $i < count($list);$i++){
            if(is_dir($list[$i])) delAllFiles ($list[$i]);
            else unlink ($list[$i]); 
        }
        rmdir($d);
    }
    delAllFiles($login1);
    
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
     <p> <? echo " $login<br/> $psrd<br/> $login1<br/>"?></p>
 </body>
</html>