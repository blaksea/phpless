<?php
function myDegree($val, $pow){
  if($pow == 0){
    return 1;
  }
  if($pow < 0){
    return myDegree( 1/$val, -$pow); 
  }
  return $val * myDegree($val, $pow-1);
}
 
$y = myDegree(2, 3);
echo $y;
?>