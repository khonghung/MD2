<?php

include_once "classCylinder.php";

$circle = new Circle( 3 , "red");
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo $circle->toString(). '<br />';


$cylinder = new Cylinder(3 , "red" ,5 );
echo "Calculate Volume: ".$cylinder->calculateVolume() . '<br />';
echo $cylinder->toString();
