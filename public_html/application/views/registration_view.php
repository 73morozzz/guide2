<div style="margin:0px 0px 0px 20px;">
<p>
<h2>Регистрация</h2>
    <form action="/registrationtest" method="post" enctype="multipart/form-data">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="31" maxlength="31">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Пароль:<br></label>
    <input name="password" type="password" size="31" maxlength="31">
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <label>Выберите аватар. <br>Изображение формата jpg, gif или png:<br></label>
    <input type="file" name="fupload">
</p>
<p>
    <label>Имя:<br></label>
    <input name="name" type="text" size="31" maxlength="31">
</p>
	
<p>
    <label>Фамилия:<br></label>
    <input name="family" type="text" size="31" maxlength="31">
</p>

<p>
    <label>Email:<br></label>
    <input name="email" type="text" size="31" maxlength="31">
</p>

<p>
    <label>Город:<br></label>
	<select name="city">
	<?php
		foreach($data as $row)
		{
			echo '<option value = "'.$row['id'].'">'.$row['name'].'</option>';	
		}
    ?>
	</select>
</p>

<p>
    <input type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
</p>
</div>