<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>Название статьи</h1>
        <p>Текст статьи ........................................</p>
        <h2>Комментарии</h2>
        
        <? if (count($array)!= 0){ ?>
        <table>
            <?for ($i = 0; $i < count($array); $i++){?>
            <tr>
                <td><b><?=$array[$i]["name"]?>:</b></td>
                <td><?=$array[$i]["comment"]?>:</td>                
            </tr>
            <tr>
                <td colspan='2'><hr /></td>
            </tr>
            <?}?>
        </table>
        <?}?>
        <h3>Добавить коментарий</h3>
        <form name ="myform" action="controller.php" method="post">
            <table>
                <tr>
                    <td>Имя:</td>
                    <td>
                        <input type="text" name="name"/>
                    </td>
                </tr>
                <tr>
                    <td>Коментарий:</td>
                    <td>
                        <textarea name="comment" cols="20" rows="3"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="addcomment" value="Отправить комментарий"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
