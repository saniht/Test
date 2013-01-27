<?header("Content-Type: text/html; charset=utf-8");?>
<?
//header ("Content-type: image/jpeg");
$directory = "img";
chdir($directory);
$dir =scandir(".");
//print_r($dir);
     $x = $_POST["X"];
     $y = $_POST["Y"];
 if (isset($_POST[send])){
$im = imagecreatefromjpeg("foto1.jpg");
$color = imagecolorat($im, $x, $y);
//print_r($color);
$s = imagecolorsforindex($im, $color);  
print_r($s);
//imagejpeg($im);
imagedestroy($im);
 }

?>
<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Lesson 310</title>
    </head>
 <body>
     <form name ="myform" action ="310.php" method="post">
         <table>
             <tr>
                 <td>координата Х:</td>
                 <td>
                     <input type="text" name="X"/>
                 </td>
             </tr>            
             <tr>
                 <td>координата Y:</td>
                 <td>
                     <input type="text" name="Y"/>
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