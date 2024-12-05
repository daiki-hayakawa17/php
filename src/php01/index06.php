<?php

// function outputNumber($a)
// {
//     echo "引数の値は" . $a . "です";
//     return;
// }

// outputNumber(5);

// function outputHello()
// {
//     echo "Hello world";
// }

// outputHello();

// function text($number1, $number2)
// {
//     $value = $number1 + $number2;
//     return $value;
// }

// $total = text(2,4);
// echo $total;

// function total($score1, $score2, $score3)
// {
//     $total = $score1 + $score2 + $score3;
//     if($total >= 210){
//         echo "合計点は" . $total . "なので合格です";
//     }else{
//         echo "合計点は" . $total . "なので不合格です";
//     }
// }

// $score = total(100, 100,1);
// echo $score;

function triangle($bottom, $height)
{
    return $bottom * $height / 2;;
}

function square($width, $height1)
{
    $answer2 = $width * $height1;
    return $answer2;
}

function answer3($top, $bottom2, $height2)
{
    $answer3 = ($top + $bottom2) * $height2 / 2;
    return $answer3;
}

echo triangle(20,30) . "<br>";

echo square(20,30) . "<br>";

echo answer3(20,30,20) . "<br>";