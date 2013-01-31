<?
session_start();//старт сесии (можно использовать значение на любой странице)
header("Content-Type: text/html; charset=utf-8");
if (isset ($_POST["send"])){
    $from = $_POST["from"];
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $_SESSION["from"]=$from;
    $_SESSION["to"]=$to;
    $_SESSION["subject"]=$subject;
    $_SESSION["message"]=$message;
   $error_from = "";
   $error_to = "";
   $error_subject = "";
   $error_message = "";
   $error = false;
   if (!preg_match("/[a-z0-9][a-z0-9-_\.]*[a-z0-9]*@([a-z0-9]+([a-z0-9]*[a-z0-9]+)*\.)+[a-z]+/i", $from)){
       $error_from = "Не коректный имейл";
       $error = true;
   }
   if (!preg_match("/[a-z0-9][a-z0-9-_\.]*[a-z0-9]*@([a-z0-9]+([a-z0-9]*[a-z0-9]+)*\.)+[a-z]+/i", $to)){
       $error_to = "Не коректный имейл";
       $error = true;
   }
   // проверяем длину строки тема
   if (strlen($subject)==0){
       $error_subject = "Не написана тема";
       $error = true;       
   }
   if (strlen($message)==0){
       $error_message = "Не написано сообщение";
       $error = true;       
   }
   //если нету значения в переменной ерор то мы отправляем сообщение
   if (!$error){
       $subject = "?windows-1251?B?".base64_encode($subject)."?=";
       $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain";
       mail($to, $subject, $message, $headers);
       header("Location: success.php?send=1");
       exit;
   }
}
?>
<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Lesson 310</title>
    </head>
 <body>
     <form name ="myform" action ="322.php" method="post">
         <table>
             <tr>
                 <td>От кого:</td>
                 <td>
                     <input type="text" name="from" value="<?=$_SESSION["from"];?>"/>
                 </td>
                 <td>
                     <span style="color:red;"><?=$error_from;?></span>
                 </td>
             </tr>            
             <tr>
                 <td>Кому:</td>
                 <td>
                     <input type="text" name="to" value="<?=$_SESSION["to"];?>"/>
                 </td>
                 <td>
                     <span style="color:red;"><?=$error_to;?></span>
                 </td>
             </tr>            
             <tr>
                 <td>Тема:</td>
                 <td>
                     <input type="text" name="subject" value="<?=$_SESSION["subject"];?>"/>
                 </td>
                 <td>
                     <span style="color:red;"><?=$error_subject;?></span>
                 </td>
             </tr>            
             <tr>
                 <td>Сообщение:</td>
                 <td>
                     <textarea name="message" cols="15" rows="10"><?=$_SESSION["message"];?></textarea>
                 </td>
                  <td>
                     <span style="color:red;"><?=$error_message;?></span>
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

