<?php
function triangle($ander1, $high1){
    $third = $ander1 * $high1 / 2;
    return $third;
}
function square($vertical, $beside1){
    $fourth = $vertical * $beside1;
    return $fourth;
}
function trapezoid($top, $ander2, $high2){
    $zoid = ($ander2 + $top) * $high2 / 2;
    return $zoid;
}

$tri = triangle(6, 8);
echo $tri . "<br \>";
$squ = square(6, 8);
echo $squ . "<br \>";
$tra = trapezoid(4, 6, 8);
echo $tra . "<br \>";
