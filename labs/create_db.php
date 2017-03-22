<?php
//Создать соединение с сервером
$link = mysqli_connect ("localhost", "root", "");
if ($link) {
	echo "Соединение с сервером установлено", "<br>";
} else {
	echo "Нет соединения с сервером";
}


//Создать БД MySiteDB
//Сначала формирование запроса на создание
$db = "MySiteDB2";
$query = "CREATE DATABASE $db";
