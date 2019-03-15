<?php

$num1 = '10';
$num2 = '100';

echo $num1;
echo '<br>+<br>';
echo $num2;
echo '<br>=<br>';
echo getSum($num1, $num2);

function getSum(string $str1, string $str2) {
    $length1 = strlen($str1);
    $length2 = strlen($str2);
    $maxLength = ($length1 > $length2) ? $length1 : $length2;

    $carry = 0;
    $result = '';
    for ($i = $maxLength - 1; $i >= 0; $i--) {
        $j = $maxLength - $i;
        $num1 = ($j <= $length1) ? $str1[$length1 - $j] : 0;
        $num2 = ($j <= $length2) ? $str2[$length2 - $j] : 0;

        $sum = $num1 + $num2 + $carry;

        if ($sum > 9) {
            $carry = 1;
            $sum -= 10;
        } else {
            $carry = 0;
        }

        $result = $sum.$result;
    }

    $result = ($carry) ? $carry.$result : $result;

    return $result;
}