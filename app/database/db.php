<?php
require 'connect.php';

function test($value)
{
  echo '<pre>';
  print_r($value);
  echo '</pre>';
};

function selectAll($table){
  global $pdo; // запрос из файла коннект
  $sql = "SELECT * FROM $table"; // $table = название таблицы в бд

$query = $pdo->prepare($sql); // подготовка
$query->execute(); // выполнение
$errInfo = $query->errorInfo(); // если будет ошибка то ее выводим и остановка


if ($errInfo[0] !==PDO::ERR_NONE) {
    echo $errInfo[2];
    exit();
}

// fetch() - получаем одну запись, fetchAll() = вся таблица

return $query->fetch();
}

test(selectAll('users'));




?>