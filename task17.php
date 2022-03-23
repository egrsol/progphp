#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Cat.php";

/*
Реализовать метод setName
Реализовать метод setName, чтобы с его помощью можно было устанавливать значение
 переменной private String name равное переданному параметру String name.
*/

$name=readline("Введите имя: ");
$cat = new Cat($name);
print($cat."\n");
$name=readline("Введите другое имя: ");
$cat->setName($name);
print($cat."\n");
