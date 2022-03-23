#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Circle.php";

/*
Создать класс Circle
Создать класс (Circle) круг, с тремя инициализаторами:

- centerX, centerY, radius

- centerX, centerY, radius, width

- centerX, centerY, radius, width, color
*/

$centerX = readline("Введите центр круга X: ");
$centerY = readline("Введите центр круга Y: ");
$radius = readline("Введите радиус круга: ");

$circle1 = new Circle($centerX,$centerY,$radius);
$circle2 = new Circle($centerX,$centerY,$radius);
$circle3 = new Circle($centerX,$centerY,$radius);

$width = readline("Введите толщину линии: ");
$circle2->initialize($centerX,$centerY,$radius,$width);

$color = readline("Введите цвет линии: ");
$circle3->initialize($centerX,$centerY,$radius,$width,$color);

print("$circle1\n");
print("$circle2\n");
print("$circle3\n");
