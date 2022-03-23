#!/usr/bin/env php
<?php

require "lib/func.php";

/*
Сортировка трех чисел
Ввести с клавиатуры три числа, и вывести их в порядке убывания.
*/

$num_arr = [];

define("LEN", 7);

for($i=0; $i<LEN; $i++) {
	$num_arr[$i] = readline("Введите $i число: ");
}

for($i=0; $i<LEN; $i++) {
	$m=maxarr($num_arr, $i);
	$num_arr=swaparr($num_arr,$i,$m);
}

for($i=0; $i<LEN; $i++) {
	print($num_arr[$i]."\n");
}
