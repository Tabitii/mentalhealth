<?php
// ----------------------------конфигурация-------------------------- //


$backurl="http://learner.abtz.ru/timer.html";  // На какую страничку переходит после отправки письма

//---------------------------------------------------------------------- //



// Принимаем данные с формы


$subject = $_POST['subject'];
$lesson = $_POST['lesson'];
$time = $_POST['time'];


// Параметры для подключения
$db_host = "p240539.mysql.ihc.ru";
$db_user = "p240539_learn"; // Логин БД
$db_password = "akF25366ct"; // Пароль БД
$db_base = 'p240539_learn'; // Имя БД
$db_table = "lesson_time"; // Имя Таблицы БД

// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$result = $mysqli->query("INSERT INTO ".$db_table." (subject,lesson, time) VALUES ('$subject','$lesson','$time')");

  if ($result == true){
      echo "Информация занесена в базу данных";
  }else{
      echo "Информация НЕ!!!!! занесена в базу данных";
  }

print "<script language='Javascript'><!--
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000);
//--></script>
<p>Предмет: $subject</p>
<p>Количество уроков: $lesson</p>
<p>Часы: $time</p>
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";
exit;


?>
