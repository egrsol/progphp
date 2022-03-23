#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Cat.php";

/*
Провести три боя  попарно между котами
Создать три кота используя класс Cat.

Провести три боя попарно между котами.

Класс Cat создавать не надо. Для боя использовать метод boolean fight(Cat anotherCat).

Результат каждого боя вывести на экран.
*/


$name = readline("Введите имя кота: ");
$age = readline("Введите возраст: ");
$weight = readline("Введите вес кота: ");
$strength = readline("Введите силу кота: ");
$cat1 = new Cat($name,"",$age,$weight,$strength);

$name = readline("Введите имя кота: ");
$age = readline("Введите возраст: ");
$weight = readline("Введите вес кота: ");
$strength = readline("Введите силу кота: ");
$cat2 = new Cat($name,"",$age,$weight,$strength);

$name = readline("Введите имя кота: ");
$age = readline("Введите возраст: ");
$weight = readline("Введите вес кота: ");
$strength = readline("Введите силу кота: ");
$cat3 = new Cat($name, "",$age,$weight,$strength);

if($cat1->fight($cat2)) {
	$name=$cat1->getName();
	print("Кот $name победил.\n");
} else {
	$name=$cat2->getName();
	print("Кот $name победил.\n");
}

if($cat1->fight($cat3)) {
	$name=$cat1->getName();
	print("Кот $name победил.\n");
} else {
	$name=$cat3->getName();
	print("Кот $name победил.\n");
}

if($cat2->fight($cat3)) {
	$name=$cat2->getName();
	print("Кот $name победил.\n");
} else {
	$name=$cat3->getName();
	print("Кот $name победил.\n");
}
