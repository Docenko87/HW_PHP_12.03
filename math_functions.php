<?php

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        return "Ошибка: на ноль делить нельзя!";
    }
}

function remainder($a, $b) {
    if ($b != 0) {
        return $a % $b;
    } else {
        return "Ошибка: на ноль делить нельзя!";
    }
}

?>
