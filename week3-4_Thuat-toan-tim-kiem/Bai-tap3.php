<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method = "post">
    <textarea id="w3review" name="input" rows="4" cols="50"></textarea>
    <br/>
    <input type="submit" value="Submit">
    </form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $inputs = $_POST["input"];
    $array = explode("," , $_REQUEST[$inputs]);
}
   
    $VTel = [];
    $MoBiPhone = [];
    $ViNa = [];
    $noNumber = [];

    $i = 0; 
while ($i<= count($array)){
 if($array[$i] >= 320 && $array[$i] <= 390){
    $array_push($VTel, $array[$i]);
 }
 else if($array[$i] >= 810 && $array[$i] <= 910){ 
    $array_push($MoBiPhone, $array[$i]);
 }
 else if($array[$i] >= 700 && $array[$i] <= 790){
    $array_push($ViNa, $array[$i]);
 } 
 else {
    $array_push($noNumber, $array[$i]);
 }
 $i++;
}


echo implode("",$VTel);


?>
</body>
</html>


