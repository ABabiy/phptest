<?php
/* 
ЗАДАНИЕ 1
- Создайте константу для хранения имени XML-файла
- Проверьте, была ли отправлена HTML-форма?
	Если она была отправлена: отфильтруйте полученные данные
- Получите данные об IP-адресе пользователя	
- Получите данные о текущих дате и времени
*/

/*
ЗАДАНИЕ 2
- Создайте объект DOMDocument
- Проверьте, существует ли xml-документ с данными
	Если существует, загрузите его в созданный объект
	и получите корневой элемент
	Если не существует, создайте корневой элемент "users"
	и привяжите его к объекту
*/

/*
ЗАДАНИЕ 3
- Cоздайте новый XML-элемент "user" для очередной записи
- Cоздайте XML-элементы для всех данных Гостевой книги:
	name, email, msg, IP, datetime
- Cоздайте текстовые узлы для всех указанных элементов
- Привяжите текстовые узлы к соответствующим XML-элементам
- Привяжите XML-элементы с данными заказа к XML-элементу "user"
- Привяжите XML-элемент "user" к корневому элементу "users"
- Сохраните файл
- Перезапросите страницу для избавления от посланных данных
*/	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Гостевая книга</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Гостевая книга</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Ваше имя:<br />
<input type="text" name="name" /><br />
Ваш E-mail:<br />
<input type="text" name="email" /><br />
Сообщение:<br />
<textarea name="msg" cols="50" rows="5"></textarea><br />
<br />
<input type="submit" value="Добавить!" />

</form>

<?php
/*
ЗАДАНИЕ 4
- Создайте объект SimpleXML и загрузите в него XML-документ
- Выведите в браузер все сообщения, а также информацию
  об авторе каждого сообщения в произвольной форме
  в обратном порядке
*/
?>

</body>
</html>