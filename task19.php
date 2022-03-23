#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Cat.php";

/*
Реализовать метод setCatsCount
Реализовать метод setCatsCount так, чтобы с его помощью можно было устанавливать
 значение переменной catsCount равное переданному параметру.
*/

$name = readline("Введите имя кота: ");
$cat = new Cat($name);
Cat::setCatsCount(15);
print("Количество котов: ".Cat::getCatsCount()."\n");
