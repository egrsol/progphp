#!/usr/bin/env php
<?php

require "lib/func.php";

/*
Экранирование символов
Про экранирование символов в Java читайте в дополнительном материале к лекции.

Вывести на экран следующий текст - две строки:



It's Windows path: "C:\Program Files\Java\jdk1.7.0\bin"

It's Java string: \"C:\\Program Files\\Java\\jdk1.7.0\\bin\"
*/


print("It's Windows path: \"C:\\Program Files\\Java\\jdk1.7.0\\bin\"\n");
print("It's Java string: \\\"C:\\\\Program Files\\\\Java\\\\jdk1.7.0\\\\bin\\\"\n");
