<?php
// String
$name = "ravi";
$friend = "Rohit";
echo "My name is $name and my friend is $friend<br>";

// Integer
$income = 300;
$age = 20;
echo "My income is $income and my age is $age<br>";

// Float
$height = 5.6;
$weight = 55.5;
echo "My height is $height and my weight is $weight<br>";

// Boolean
$married = true;
$single = false;

echo "Married status: $married<br>"; // Outputs: 1
echo "Single status: $single<br>";   // Outputs nothing

// Better way to display boolean values:
echo "Married status: " . ($married ? 'true' : 'false') . "<br>";
echo "Single status: " . ($single ? 'true' : 'false') . "<br>";
?>
