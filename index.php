<?php

include 'math_functions.php';

$num1 = (int)readline('Укажите первое число для преобразования по функциям: ');
$num2 = (int)readline('Укажите второе число для преобразования по функциям: ');

echo "Разность чисел $num1 и $num2 = " . subtract($num1, $num2) . "\n";
echo "Умножение чисел $num1 и $num2 = " . multiply($num1, $num2) . "\n";
echo "Деление чисел $num1 и $num2 = " . divide($num1, $num2) . "\n";
echo "Остаток от деления чисел $num1 на $num2 = " . remainder($num1, $num2) . "\n";

?>
