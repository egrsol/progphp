#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Cat.php";

/*
Реализовать метод setName
Реализовать метод setName, чтобы с его помощью можно было устанавливать значение
 переменной private String fullName равное значению локальной переменной String fullName.
*/

$name = readline("Введите имя кота: ");
$cat = new Cat($name);
print("$cat\n");
$surname = readline("Введите фамилию кота: ");
$cat->setName($name, $surname);
print("$cat\n");


