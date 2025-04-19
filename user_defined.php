<?php
$sales = 1000;
$tax_rate = 0.85;

function getTaxes($sales, $tax_rate){
    $totalPayment = $sales * $tax_rate;
    return $totalPayment;
}
$getPrice = getTaxes($sales, $tax_rate);
echo"the total payment is $getPrice";
?>