#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Cat.php";

/*
Создать класс Cat
Создать класс Cat. У кота должно быть имя (name, String), возраст (age, int),
 вес (weight, int), сила (strength, int).
*/

$name = readline("Введите имя кота: ");
$cat = new Cat($name);
$age = readline("Введите возраст кота: ");
$cat->setAge($age);
$weight = readline("Введите вес кота: ");
$cat->setWeight($weight);
$strength = readline("Введите силу кота: ");
$cat->setStrength($strength);
print("$cat\n");
