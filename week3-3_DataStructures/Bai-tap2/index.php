<?php

function check($sym) {
    $left = "(";
    $right = ")";

    $stack = new SplStack();
    for ($i = 0; $i < strlen($sym); $i++) 
    {
        if($sym[$i] == $left) 
        {
            $stack->push($sym[$i]);
        }
        else if($sym[$i] == $right) 
        {
           if($stack->isEmpty())
           {
               return false;
           } 
        //    else if($left == $sym[$i]) 
        //    {
        //       return false;
        //    }
            else
           {
                $stack->pop();
           }

       }
    }
    if($stack->isEmpty()) {
        return true;
    }else{
        return false;
    }
    
}

// $expression1 = 's * (s – a) * (s – b) * (s – c)';
// $expression2 = '(– b + (b2 – 4*a*c)^0.5) / 2*a ';
$expression1 = 's * (s – a) * (s – b * (s – c)';
$expression2 = 's * (s – a) * s – b) * (s – c)';
$expression3 = '(– b + (b^2 – 4*a*c)^(0.5/ 2*a))';

echo "<pre>";
// var_dump(check($expression1));
// var_dump(check($expression2));
var_dump(check($expression1));
var_dump(check($expression2));
var_dump(check($expression3));
