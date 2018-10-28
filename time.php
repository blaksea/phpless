<?php
$timeH=date(H);
$timeM=date(i);
switch ($timeH){
case 00:
case 5:
case 6:
case 7:
case 8:
case 9:
case 10:
case 11:
case 12:
case 13:
case 14:
case 15:
case 16:
case 17:
case 18:
case 19:
case 20:
	$x="часов";
break;

case 1:
case 21:
	$x="час";
break;

case 2:
case 3:
case 4:
case 22:
case 23:
	$x="часа";
break;

}

echo "Текущее время: $timeH $x $timeM минут"; //с минутами тем же вариантом слишком длинно, думаю, можно иным способом, но не придумал, как

?>