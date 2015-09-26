<div style="margin:0px 0px 0px 20px;">
<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
    <h2>Войти</h2>
    <form action="/logintest" method="post">

    <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
 
 <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="31" maxlength="31">
    </p>


    <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
 
    <p>

    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="31" maxlength="31">
    </p>

    <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 

    <p>
    <input type="submit" name="submit" value="Войти" class="button light">

    <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 

<br><br>
 <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 
<a href="/registration" class="button brown solid">Зарегистрироваться</a> 
 
	</p></form>
    <br>
    <?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт, как гость<br>";
    }
    else
    {
    echo "Вы    вошли на сайт, как $_SESSION[login] (<a    href='myscripts/exit.php'>выход</a>)<br>";
      
    }
?>
</div>