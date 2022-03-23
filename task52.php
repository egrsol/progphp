#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Friend.php";

/*
Создать класс Friend
Создать класс Friend (друг) с тремя конструкторами:

- Имя

- Имя, возраст

- Имя, возраст, пол
*/

$name = readline("Введите имя друга: ");
$friend1 = new Friend($name);
$age = readline("Введите возраст друга: ");
$friend2 = new Friend($name,$age);
$pol = readline("Введите пол друга: ");
$friend3 = new Friend($name,$age,$pol);
print("$friend1\n");
print("$friend2\n");
print("$friend3\n");
