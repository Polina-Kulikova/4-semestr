<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Количество слов и символов</title>
</head>
<body>
<h1>Задание 2a</h1>
<form method="post">
    <textarea name="text" rows="4" cols="50"></textarea><br>
    <input type="submit" name="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $text = $_POST['text'];

        $wordCount = str_word_count($text);
        $charCount = strlen($text);

        echo "Количество слов: $wordCount<br>";
        echo "Количество символов: $charCount<br>";
        echo "Текст: $text<br>";
    }
}
?>

</body>
</html>