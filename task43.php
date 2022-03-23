#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Cat.php";

/*
Реализовать метод fight
Реализовать метод boolean fight(Cat anotherCat):

реализовать механизм драки котов в зависимости от их веса, возраста и силы.

Зависимость придумать самому. Метод должен определять, выиграли ли мы (this) бой или нет,

т.е. возвращать true, если выиграли и false - если нет.

Должно выполняться условие:

если cat1.fight(cat2) = true , то cat2.fight(cat1) = false
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

if($cat1->fight($cat2)) {
	$name = $cat1->getName();
	print("Кот $name победил\n");
} elseif($cat2->fight($cat1)) {
	$name = $cat2->getName();
	print("Кот $name победил\n");
} else {
	print("Ничья\n");
}
