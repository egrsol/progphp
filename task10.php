#!/usr/bin/env php
<?php

require "lib/func.php";

/*
Мое имя
Вывести на экран свое имя 5 строк по 10 раз (через пробел).
*/

$s = readline("Введите строку: ");
print(povtorStr(povtorStrLine($s,10),5)."\n");
