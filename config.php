<?php
CONST PHOTO = './photos/';
CONST PHOTO_SMALL = './photos/mini/';

$host = 'localhost'; // адрес сервера 
$database = 'phpless'; // имя базы данных
$user = 'mysql'; // имя пользователя
$password = ''; // пароль

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
	or die("Ошибка " . mysqli_error($link));

?>