<?php
function FunSum($a,$b){
return $a+$b;
}
echo "Сумма a и b =" . FunSum(rand(1,10),rand(2,5));

function FunMin($a,$b){
return $a-$b;
}
echo "<hr>Разность a и b =" . FunMin(rand(1,10),rand(2,5));

function FunMult($a,$b){
return $a*$b;
}
echo "<hr>Умножение a и b =" . FunMult(rand(1,10),rand(2,5));

function FunDiv($a,$b){
return $a/$b;
}
echo "<hr>Деление a и b =" . FunDiv(rand(1,10),rand(2,5));
?>