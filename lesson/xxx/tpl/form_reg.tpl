<h1>Регистрация:</h1>
%message%
<div id="reg">
    <form name="auth" action="functions.php" method="post">
        <table>
            <tr>
                <td>Логин:</td>
                <td>
                    <input type="text" name="login" />
                </td>
            </tr>
            <tr>
                <td>Пароль:</td>
                <td>
                    <input type="password" name="password" />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <img src="captcha.php" alt="Капча"/>
                </td>
            </tr>
            <tr>
                <td>Проверочный код:</td>
                <td>
                    <input type="text" name="captcha" />
                </td>
            </tr>
            <td colspan="2" align="right">
                <input type="submit" name="reg" value="Зарегестрироваться" />
            </td>
        </table>

    </form>

</div>