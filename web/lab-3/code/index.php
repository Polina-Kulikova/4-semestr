<?php
// Найти строки 'abba', 'adca', 'abea'
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a\w{2}b/', $str, $matches);
print_r($matches[0]);
// Преобразовать числа в кубы
$str = 'a1b2c3';
echo preg_replace_callback('/\d/', function($match){
    return $match[0]*$match[0]*$match[0];
}, $str);
