#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Cat.php";

/*
Реализовать метод addNewCat
Реализовать метод addNewCat, чтобы при его вызове (т.е. добавлении нового кота),
 количество котов увеличивалось на 1. За количество котов отвечает переменная catsCount.
*/


$cat_name = readline("Введите имя кота: ");
$cat1 = new Cat($cat_name);
$cat_name = readline("Введите имя другого кота: ");
$cat2 = new Cat($cat_name);
print(Cat::getCatsCount()."\n");
