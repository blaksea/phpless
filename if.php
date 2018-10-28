<?php
$a=rand(-5,5);
$b=rand(-10,10);
echo "a = $a <br> b = $b <hr>" ;

if ($a>0 && $b>0)  {
echo "a-b = ".($a-$b);
}

elseif ($a<0 && $b<0) {
echo "a*b = ".($a*$b);
}

elseif ($a<0 && $b>0 || $a>0 && $b<0) {
echo "a+b = ".($a + $b);
}

else 
echo "a и/или b равно 0";	//Решил не делать 0 положительным

?>