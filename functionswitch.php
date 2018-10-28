<?php
function mathOperation($a, $b, $operation){
switch ($operation){
case 'sum':
	return $a+$b;
	echo 1;
	break;

case 'Min':
	return $a-$b;
	echo 1;
	break;

case 'Mult':
	return $a*$b;
	echo 1;
	break;

case 'Div':
	return $a/$b;
	echo 1;
	break;	
	
}
}
echo "" . mathOperation(rand(1,50),rand(1,30),'Mult');
echo $operation;
?>


