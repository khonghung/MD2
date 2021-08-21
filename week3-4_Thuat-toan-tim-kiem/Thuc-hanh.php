<?php

 function Min($arr){
    $min = $arr[0];
    for($i = 1; $i < count($arr); $i++){
    if($min > $arr[$i]){
      $min = $arr[$i];
    }
    }
    return $min;
 }


 $num = [];
 for($i = 0; $i < 100; ++$i){
   $num[$i] = rand(1, 101);
 }

 foreach ($num as $value){
   echo $num . "";
 }

 $minValue = Min($num);
 echo "<br/>";
 echo "The min value is: " . $minValue;



 function Max($arr){
  $max = $arr[0];
  for($i = 1; $i < count($arr); $i++){
  if($max < $arr[$i]){
    $max = $arr[$i];
  }
  }
  return $max;
}

 
$num = [];
for($i = 0; $i < 100; ++$i){
  $num [$i] = rand(1, 101);
}
foreach($num as $value){
  echo $num."";
}

$maxValue = Max($num);
echo "<br/>";
echo "the max value is : " . $maxValue;