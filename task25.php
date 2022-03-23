#!/usr/bin/env php
<?php

require "lib/func.php";

/*
Сравнить имена
Ввести с клавиатуры два имени, и если имена одинаковые вывести сообщение «Имена идентичны».
 Если имена разные, но их длины равны – вывести сообщение – «Длины имен равны».
*/

$name1 = readline("Введите имя: ");
$name2 = readline("Введите другое имя: ");

if($name1 === $name2) {
	print("Имена идентичны\n");
}

$lenname1 = strlen($name1);
$lenname2 = strlen($name2);

if($lenname1 == $lenname2) {
	print("Длины имен равны\n");
}

