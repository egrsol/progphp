#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Friend.php";

/*
Создать класс Friend
Создать класс Friend (друг) с тремя инициализаторами (тремя методами initialize):

- Имя

- Имя, возраст

- Имя, возраст, пол
*/

$friend1 = new Friend();
$friend2 = new Friend();
$friend3 = new Friend();

$name = readline("Введите имя друга: ");
$friend1->initialize($name);

$age = readline("Введите возраст: ");
$friend2->initialize($name,$age);

$pol = readline("Введите пол: ");
$friend3->initialize($name,$age,$pol);

print("$friend1\n");
print("$friend2\n");
print("$friend3\n");
