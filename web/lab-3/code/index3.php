<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['user_info'] = array(
        'Имя' => $_POST['name'],
        'Возвраст' => $_POST['age'],
        'Зарплата' => $_POST['salary'],
        'Другое' => $_POST['something']
    );
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Куликова Полина</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Имя:</label>
        <input type="text" name="name" required><br><br>
        <label for="age">Возвраст:</label>
        <input type="number" name="age" required><br><br>
        <label for="salary">Зарплата:</label>
        <input type="text" name="salary" required><br><br>
        <label for="something">Другое:</label>
        <input type="text" name="something" required><br><br>
        <input type="submit" value="Отправить">
    </form>
    <a href="page2.php"><button>Перейти на другую страницу</button></a>
</body>
</html>


