#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Cat.php";

/*
Подсчитать количество котов
Написать код, чтобы правильно считалось количество созданных котов (count)
 и на экран выдавалось правильно их количество.
*/

$name = readline("Введите имя кота: ");
$cat1 = new Cat($name);
$name = readline("Введите имя другого кота: ");
$cat2 = new Cat($name);
print("Количество котов: ".Cat::getCatsCount()."\n");
