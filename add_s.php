<?php
// ----------------------------конфигурация-------------------------- //


$backurl="http://app.abtz.ru/add_stodb.html";  // На какую страничку переходит после отправки письма

//---------------------------------------------------------------------- //



// Принимаем данные с формы


$name = $_POST['name'];
$category = $_POST['category'];
$about = $_POST['about'];
$mood = $_POST['mood'];
$body = $_POST['body'];

// Параметры для подключения
$db_host = "p240539.mysql.ihc.ru";
$db_user = "p240539_inther"; // Логин БД
$db_password = "jD3Y3sT56k"; // Пароль БД
$db_base = 'p240539_inther'; // Имя БД
$db_table = "situation"; // Имя Таблицы БД

// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$result = $mysqli->query("INSERT INTO ".$db_table." (name,category, about, mood, body) VALUES ('$name','$category','$about','$mood, '$body')");

  if ($result == true){
      echo "Информация занесена в базу данных";
  }else{
      echo "Информация НЕ!!!!! занесена в базу данных";
  }

print "<script language='Javascript'><!--
function reload() {location = \"$backurl\"}; setTimeout('reload()', 2000);
//--></script>
<p>Название ситуации: $name</p>
<p>Категория: $category</p>
<p>О ситуации: $about</p>
<p>Настроение: $mood</p>
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";
exit;


?>
