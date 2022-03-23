#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Dog.php";

/*
Геттеры и сеттеры для класса Dog
Создать class Dog. У собаки должна быть кличка String name и возраст int age.

Создайте геттеры и сеттеры для всех переменных класса Dog.
*/


$name = readline("Введите имя: ");
$age = readline("Введите возраст: ");
$dog = new Dog($name,"",$age);
print("$dog\n");
