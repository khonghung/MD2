<?php
function insertionSort($arr)
{
    $count = count($arr);

    for ($i = 0; $i < $count; $i++) 
    {
        //lặp lại từ phần tử thứ $i, vd i = 6
        //thì lặp lại từ 6 -> 0
        $value = $i;
        //lưu lại giá trị 
        $current = $arr[$i];

        //điều kiện dừng là $loop <= 0 or
        //phần tử thứ $loop - 1 > $i
        //nếu một trong 2 điều kiện đó đúng thì sẽ dừng vòng lặp 
        while ($value > 0 && ($arr[$value - 1] < $current)) 
        {
            //di rời các phần tử lên 1 bậc
            $arr[$value] = $arr[$value - 1];
            $value -= 1;
        }
        //gán giá trị $current vào giá trị tìm được 
        $arr[$value] = $current;
    }
    return $arr;
}


$myArr = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
$disPlay = insertionSort($myArr);
echo implode(" , ", $disPlay);
