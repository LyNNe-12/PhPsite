<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST['name'];
  $surname = $_POST['name'];
  echo("Ваше имя: $name"."Ваша фамилия: $surname");
}
else {
  echo('Ошибка в получении данных из формы ввода');
}
?>
