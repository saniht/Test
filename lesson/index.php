<?header("Content-Type: text/html; charset=utf-8");
require_once "lib/uploadtext_class.php";
require_once "lib/uploadimage_class.php";
if ($_POST["upload"]){
    $upload_text = new UploadText();
    $upload_image = new UploadImage();
    $success_text = $upload_text->uploadFile($_FILES["text"]);
    $success_image = $upload_image->uploadFile($_FILES["image"]);
    
    
}

?>
<html>
    <head>
        <title>загрузка файлов</title>
    </head>
    <body>
        <h1>Загрузка файлов</h1>
        <?
        If ($_POST["upload"]){
            If ($success_text) echo "Текстовый файл успешно загружен";
            else echo "Ошибка при загрузке файла";
            If ($success_image) echo "Изображение успешно загружено";
            else echo "Ошибка при загрузке файла";
        }
        ?>
        <form name="myform" action="index.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> Изображение:</td>
                    <td>
                        <input type="file" name="image" />
                    </td>
                </tr>
                <tr>
                    <td> Текст:</td>
                    <td>
                        <input type="file" name="text" />
                    </td>
                </tr>
                <tr>
                    <td colspan ="2">
                        <input type="submit" name="upload" value="Загрузить файлы"/>                    </td>
                </tr>
                
            </table>
        </form>
    </body>
</html>