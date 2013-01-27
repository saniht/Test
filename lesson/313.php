<?header("Content-Type: text/html; charset=utf-8");?>
<?php
//создаем картинку с произвольным числом
/*$im = imagecreatetruecolor(120, 40);
$rand = mt_rand(100000, 999999);
$c = imagecolorallocate($im, 255, 179, 190);
imagettftext($im, 20, -10, 10, 20, $c, "verdana.ttf", $rand);
header ("Content-type: image/png");
imagepng($im);
imagedestroy($im);*/


function newImg ($text){
$im = imagecreatetruecolor(120, 40);
//$rand = mt_rand(100000, 999999);
$c = imagecolorallocate($im, 255, 179, 190);
imagettftext($im, 20, -10, 10, 20, $c, "verdana.ttf", $text);
//header ("Content-type: image/png");
//imagepng($im);
imagepng ($im, "img_new.png");
imagedestroy($im);}
//$text = 10;
//newImg($text)

 if (isset($_POST[send_text])){
     $filename = 'C:/WebServers/home/localhost/www/lesson/img_new.png';
     // c:/users/files/my_file.html формат пути к файлу
unlink($filename);
     $text = $_POST["txt"];
 
 //echo $text;
 newImg($text);
 
 }

?>
<html>
    <head>
       <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Lesson 310</title>
    </head>
 <body>
<form name ="myform" action ="313.php" method="post">
         <table>
             <tr>
                 <td>Текст для картинки:</td>
                 <td>
                     <input type="text" name="txt"/>
                 </td>
             </tr>            
                    
             <tr>                
                 <td>
                     <input type="submit" name="send_text" value="Отправить"/>
                 </td>
             </tr>   
         </table> 
     </form>
         
         <img src="img_new.png" alt="Картинка"  />
         </body>
</html>
