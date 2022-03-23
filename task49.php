#!/usr/bin/env php
<?php

require "lib/func.php";
require "lib/Dog.php";

/*
Создать класс Dog
Создать класс Dog (собака) с тремя инициализаторами:

- Имя

- Имя, рост

- Имя, рост, цвет
*/

$name = readline("Введите имя собаки: ");
$dog1 = new Dog($name);
$dog2 = new Dog($name);
$dog3 = new Dog($name);

$height = readline("Введите рост собаки: ");
$dog2->initialize($name,0,$height);

$color = readline("Введите цвет собаки: ");
$dog3->initialize($name,0,$height,$color);

print("$dog1\n");
print("$dog2\n");
print("$dog3\n");

