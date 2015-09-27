﻿<?php
class Controller_Registrationtest extends Controller
{
	
	
    function action_index()
    {	
		
		if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
		if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
		if (isset($_POST['name'])) { $name=$_POST['name']; if ($name =='') { unset($name);} }
		if (isset($_POST['family'])) { $family=$_POST['family']; if ($family =='') { unset($family);} }
		if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
		if (isset($_POST['city'])) { $city=$_POST['city'];}
	 
		//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
		if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
		{
			$this->view->generate('text_view.php', 'template_view.php', $data="Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
			exit ();
		}
		//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
		$login = stripslashes($login);
		$login = htmlspecialchars($login);
		$password = stripslashes($password);
		$password = htmlspecialchars($password);
		$name = stripslashes($name);
		$name = htmlspecialchars($name);
		$family = stripslashes($family);
		$family = htmlspecialchars($family);
		$email = stripslashes($email);
		$email = htmlspecialchars($email);
		$city = stripslashes($city);
		$city = htmlspecialchars($city);
		
	 //удаляем лишние пробелы
		$login = trim($login);
		$password = trim($password);
		$name = trim($name);
		$family = trim($family);
		$email = trim($email);
		$city = trim($city);
		
		if    (!empty($_POST['fupload'])) //проверяем, отправил    ли пользователь изображение
        {
            $fupload=$_POST['fupload'];    $fupload = trim($fupload); 
              if ($fupload =='' or empty($fupload)) 
			  {
				unset($fupload);// если переменная $fupload пуста, то удаляем ее
              }
        }        
;
		if    (!isset($fupload) or empty($fupload) or $fupload =='')
            {
            //если переменной не существует (пользователь не отправил    изображение),то присваиваем ему заранее приготовленную картинку с надписью    "нет аватара"
            $avatar    = "avatars/net-avatara.jpg"; //можете    нарисовать net-avatara.jpg или взять в исходниках
            }          
		else 
            {

            //иначе - загружаем изображение пользователя
            $path_to_90_directory    = 'avatars/';//папка,    куда будет загружаться начальная картинка и ее сжатая копия          
         
            if(preg_match('/[.](JPG)|(jpg)|(gif)|(GIF)|(png)|(PNG)$/',$_FILES['fupload']['name']))//проверка формата исходного изображения
                      {                 
                               $filename =    $_FILES['fupload']['name'];
                               $source =    $_FILES['fupload']['tmp_name']; 
                               $target =    $path_to_90_directory . $filename;
                               move_uploaded_file($source,    $target);//загрузка оригинала в папку $path_to_90_directory           
         if(preg_match('/[.](GIF)|(gif)$/',    $filename)) {
                     $im    = imagecreatefromgif($path_to_90_directory.$filename) ; //если оригинал был в формате gif, то создаем    изображение в этом же формате. Необходимо для последующего сжатия
                     }
                     if(preg_match('/[.](PNG)|(png)$/',    $filename)) {
                     $im =    imagecreatefrompng($path_to_90_directory.$filename) ;//если    оригинал был в формате png, то создаем изображение в этом же формате.    Необходимо для последующего сжатия
                     }
                     
                     if(preg_match('/[.](JPG)|(jpg)|(jpeg)|(JPEG)$/',    $filename)) {
                               $im =    imagecreatefromjpeg($path_to_90_directory.$filename); //если оригинал был в формате jpg, то создаем изображение в этом же    формате. Необходимо для последующего сжатия
                     }           
//СОЗДАНИЕ КВАДРАТНОГО ИЗОБРАЖЕНИЯ И ЕГО ПОСЛЕДУЮЩЕЕ СЖАТИЕ    ВЗЯТО С САЙТА www.codenet.ru           
// Создание квадрата 90x90
            // dest - результирующее изображение 
            // w - ширина изображения 
            // ratio - коэффициент пропорциональности           
$w    = 90;  //    квадратная 90x90. Можно поставить и другой размер.          
// создаём исходное изображение на основе 
            // исходного файла и определяем его размеры 
            $w_src    = imagesx($im); //вычисляем ширину
            $h_src    = imagesy($im); //вычисляем высоту изображения
                     // создаём    пустую квадратную картинку 
                     // важно именно    truecolor!, иначе будем иметь 8-битный результат 
                     $dest = imagecreatetruecolor($w,$w);           
         //    вырезаем квадратную серединку по x, если фото горизонтальное 
                     if    ($w_src>$h_src) 
                     imagecopyresampled($dest, $im, 0, 0,
                                         round((max($w_src,$h_src)-min($w_src,$h_src))/2),
                                      0, $w, $w,    min($w_src,$h_src), min($w_src,$h_src));           
         // вырезаем    квадратную верхушку по y, 
                     // если фото    вертикальное (хотя можно тоже серединку) 
                     if    ($w_src<$h_src) 
                     imagecopyresampled($dest, $im, 0, 0,    0, 0, $w, $w,
                                      min($w_src,$h_src),    min($w_src,$h_src));           
         // квадратная картинка    масштабируется без вырезок 
                     if ($w_src==$h_src) 
                     imagecopyresampled($dest,    $im, 0, 0, 0, 0, $w, $w, $w_src, $w_src);           
$date=time();    //вычисляем время в настоящий момент.
            imagejpeg($dest,    $path_to_90_directory.$date.".jpg");//сохраняем    изображение формата jpg в нужную папку, именем будет текущее время. Сделано,    чтобы у аватаров не было одинаковых имен.          
//почему именно jpg? Он занимает очень мало места + уничтожается    анимирование gif изображения, которое отвлекает пользователя. Не очень    приятно читать его комментарий, когда краем глаза замечаешь какое-то    движение.          
$avatar    = $path_to_90_directory.$date.".jpg";//заносим в переменную путь до аватара. 

$delfull    = $path_to_90_directory.$filename; 
            unlink    ($delfull);//удаляем оригинал загруженного    изображения, он нам больше не нужен. Задачей было - получить миниатюру.
            }
            else 
                {
                                //в случае    несоответствия формата, выдаем соответствующее сообщение
					$this->view->generate('text_view.php', 'template_view.php', $data="Аватар должен быть в    формате <strong>JPG,GIF или PNG</strong>");
                    exit ();
                }
            //конец процесса загрузки и присвоения переменной $avatar адреса    загруженной авы
            }       
	 // подключаемся к базе
		include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
	 // проверка на существование пользователя с таким же логином
		$result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
		$myrow = mysql_fetch_array($result);
		if (!empty($myrow['id'])) {
			$this->view->generate('text_view.php', 'template_view.php', $data="Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");  
			exit ();
		}
	 // если такого нет, то сохраняем данные
		$result2 = mysql_query ("INSERT INTO users (login,password,avatar,name,family,email,city) VALUES('$login','$password','$avatar','$name','$family','$email','$city')");
		// Проверяем, есть ли ошибки
		if ($result2=='TRUE')
		{
			$this->view->generate('text_view.php', 'template_view.php', $data="Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='/main'>Главная страница</a>");  
		}
		else {
			$this->view->generate('text_view.php', 'template_view.php', $data="Ошибка! Вы не зарегистрированы.");  
		}
    }
    }
	