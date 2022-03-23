#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Rectangle.php";

/*
Создать класс прямоугольник (Rectangle)
Создать класс прямоугольник (Rectangle). Его данными будут top, left, width, height

(левая координата, верхняя, ширина и высота). Создать для него
 как можно больше методов initialize(…)

Примеры:

-	заданы 4 параметра: left, top, width, height

-	ширина/высота не задана (оба равны 0)

-	высота не задана (равно ширине) создаём квадрат

-	создаём копию другого прямоугольника (он и передаётся в параметрах)
*/

$top = readline("Введите отступ от верха: ");
$left = readline("Введите отступ слева: ");

$rectangle1 = new Rectangle();
$rectangle1->initialize($top,$left);

$width = readline("Введите ширину прямоугольника: ");

$rectangle2 = new Rectangle();
$rectangle2->initialize($top,$left,$width);

$height = readline("Введите высоту прямоугольника: ");

$rectangle3 = new Rectangle();
$rectangle3->initialize($top,$left,$width,$height);

print("$rectangle1\n");
print("$rectangle2\n");
print("$rectangle3\n");
