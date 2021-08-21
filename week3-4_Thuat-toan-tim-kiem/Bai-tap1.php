<?php
$num = 60;


function random($min, $max)
{
    return rand($min, $max);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $maytinhdoan = (int) $_POST["result"];
    $anwSer = $_POST["so"];

    if ($anwSer == "lonhon") {
        $max = $maytinhdoan;
        $min = (int) $_POST["min"];
        $maytinhdoan = random($min, $max);
        echo "min: " . $min . "<br/>";
        echo "max: " . $max . "<br/>";
        echo "máy tính đoán : " . $maytinhdoan . "<br/>";
    } else if ($anwSer == "nhohon") {
        $max = (int) $_POST["max"];
        $min = $maytinhdoan;
        $maytinhdoan = random($min, $max);
        echo "min: " . $min . "<br/>";
        echo "max: " . $max . "<br/>";
        echo "máy tính đoán: " . $maytinhdoan . "<br/>";
    } else {
        if ($maytinhdoan == $num) {
            echo "đoán đúng rồi " . "<br/>";
        }
    }
} 
else 
{
    $min = 1;
    $max = 100;
    $maytinhdoan = random(1, 100);
    echo "số máy tính đoán " . $maytinhdoan;
}
echo "số mình chọn " . $num

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        <input type="radio" name="so" value="lonhon"> Lớn hơn
        <input type="radio" name="so" value="nhohon"> Nhỏ hơn
        <input type="hidden" name="result" value="<?php echo $maytinhdoan ?>">
        <p><br /></p>
        <input type="hidden" name="min" value="<?php echo $min ?>">
        <input type="hidden" name="max" value="<?php echo $max ?>">
        <input type="submit" value="check">
    </form>
</body>

</html>