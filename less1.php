﻿<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true?  Интерпретатор по умолчанию видит числовое значение, поэтому отбрасывает 0 в значении переменной b
    var_dump((int)'012345');     // Почему 12345? Целочисленное значение, 0 отбрасывается.
    var_dump((float)123.0 === (int)123.0); // Почему false? Происходит сравнение по значению и типу данных. float - число с плавающей запятой, int - целочисленное .
    var_dump((int)0 === (int)'hello, world'); // Почему true?  int преобразует строку в число, в данном случае текст 'hello, world' преобразуется в 0.
?>
