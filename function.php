<?php
function processMarks($maksArr){
    $sum = 0;
    foreach($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}

$raviMarks = [12,23,34,56,67,78,89];
$sumMarks = processMarks($raviMarks);

echo "Total marks scored by ravi is $sumMarks";
