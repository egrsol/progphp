#!/usr/bin/env php
<?php

require "lib/func.php";

/*
18+
Ввести с клавиатуры имя и возраст. Если возраст меньше 18 вывести надпись «Подрасти еще».
*/

$name = readline("Введите имя: ");
$age = readline("Введите возраст: ");
if($age < 18) {
	print("Подрасти еще\n");
}