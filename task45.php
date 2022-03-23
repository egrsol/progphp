#!/usr/bin/env php
<?php

require "lib/func.php";
//require "lib/Cat.php";

/*
Создать три объекта типа Cat
В методе main создать три объекта типа Cat и заполнить их данными.

Использовать класс Cat из первой задачи. Класс Cat создавать не надо.
*/

$name = readline("Введите кличку кота: ");
$age = readline("Введите возраст кота: ");
$weight = readline("Введите вес кота: ");
$strength = readline("Введите силу кота: ");
$cat1 = new Cat($name,"",$age,$weight,$strength);

$name = readline("Введите кличку кота: ");
$age = readline("Введите возраст кота: ");
$weight = readline("Введите вес кота: ");
$strength = readline("Введите силу кота: ");
$cat2 = new Cat($name,"",$age,$weight,$strength);

$name = readline("Введите кличку кота: ");
$age = readline("Введите возраст кота: ");
$strength = readline("Введите вес кота: ");
$cat3 = new Cat($name,"",$age,$weight,$strength);

if($cat1->fight($cat2)) {
	$name = $cat1->getName();
	print("Кот $name победил.");
} else {
	$name = $cat2->getName();
	print("Кот $name победил.");
}
/*
if($cat1->fight($cat3)) {
	$name = $cat1->getName();
	print("Кот $name победил.");
} else {
	$name = 
}
*/
print("$cat1\n");
print("$cat2\n");
print("$cat3\n");
