#!/usr/bin/env php
<?php

require "lib/func.php";

/*
Четные числа
Используя цикл for вывести на экран чётные числа от 1 до 100 включительно.

Через пробел либо с новой строки.
*/

for($i=2; $i<100; $i+=2) {
	print("$i ");
}
print("100\n");