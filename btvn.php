<?php

function UCLN($a, $b){
    if($b == 0){
        return $a;
    }
    else{
        return UCLN($b, $a % $b);
    }
}

function BCNN($a, $b){
    return ($a * $b) / UCLN($a, $b);
}

$num1 = 24;
$num2 = 36;

echo "Uoc chung lon nhat cua ".$num1." va ".$num2." la: ".UCLN($num1, $num2)."<br>";
echo "Boi chung nho nhat cua ".$num1." va ".$num2." la: ".BCNN($num1, $num2);
?>
