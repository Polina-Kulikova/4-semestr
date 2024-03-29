<!DOCTYPE html>
<html>
<head>
    <title>Регулярные выражения</title>
</head>
<body>
<h1>Задание 1: Регулярные выражения</h1>

<?php
// Найдем строки 'abba', 'adca', 'abea' по шаблону: буква 'a', два любых символа, буква 'b'
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a..b/', $str, $matches);
echo "<p>Найденные строки: " . implode(', ', $matches[0]) . "</p>";

// Преобразуем строку 'a1b2c3' так, чтобы вместо чисел стояли их кубы
$str_numbers = 'a1b2c3';
$new_str = preg_replace_callback('/\d/', function($match) {
    return pow($match[0], 3);
}, $str_numbers);
echo "<p>Преобразованная строка: $new_str</p>";
?>
</body>
</html>