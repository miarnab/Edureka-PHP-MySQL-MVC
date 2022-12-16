<?php
$a = readline("Enter the first number: ");
$b = readline("Enter the second number: ");
$sum = $a + $b;
echo "Sum of the two numbers: ",$sum,"\n";
if($a>$b)
{
    $diff = $a - $b;
    echo "Difference of the two numbers: ",$diff,"\n";
}
else
{
    $diff = $b - $a;
    echo "Difference of the two numbers: ",$diff,"\n";
}
$product = $a * $b;
echo "Product of the two numbers: ",$product,"\n";
if($a>$b)
{
    $quo = $a / $b;
    $rem = $a % $b;
    echo "Quotient of the two numbers: ",$quo,"\n";
    echo "Remainder of the two numbers: ",$rem,"\n";
}
else
{
    $quo = $b / $a;
    $rem = $b % $a;
    echo "Quotient of the two numbers: ",$quo,"\n";
    echo "Remainder of the two numbers: ",$rem,"\n";
}
?>