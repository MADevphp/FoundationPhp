<?php
$a = 123;
$b = $a / 100;//1.23
$d = $b % 10;//1
$c = $a % 100;//23
$s = $c / 10;//2.3
$s1 = $s %10;//2
$l = $c % 10;//3
$sum = $d * 100 + $l * 10 + $s1;
print $sum;//132

