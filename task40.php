#!/usr/bin/env php
<?php

require "lib/func.php";

/*
Посчитать сумму чисел
Вводить с клавиатуры числа и считать их сумму. Если пользователь ввел -1,

вывести на экран сумму и завершить программу.  -1 должно учитываться в сумме.
*/


$i=0;
$s=0;
print("Для выхода нажмите -1\n");
while (($r=readline("Введите число: "))!=(-1)) {
	$s+=$r;
}
$s--;
print("$s\n");