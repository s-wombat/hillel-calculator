<?php
require 'Calculator.php';
header("Content-Type: text/plain; charset=utf-8"); // без заголовка не работал PHP_EOL

$a = 4;
$b = 3.4;

$calculator = new Calculator;

try {
    echo $a . '+' . $b . '=' . $calculator->addition($a, $b) . PHP_EOL;
    echo $a . '-' . $b . '=' . $calculator->subtraction($a, $b) . PHP_EOL;
    echo $a . '*' . $b . '=' . $calculator->multiplication($a, $b) . PHP_EOL;
    echo $a . '/' . $b . '=' . $calculator->division($a, $b) . PHP_EOL;
} catch (Exception $e) {
    echo 'Error: ', $e->getMessage(), "\n";
}