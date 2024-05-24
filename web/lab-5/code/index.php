<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP + MYSQL</title>
</head>
<body>
<h1>Php</h1>
<?php
    $mysqli = new mysqli('db', 'root', 'helloworld', 'web');

    if (mysqli_connect_errno()){
        printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
        exit;
    }
    $mysqli->query('INSERT INTO ad(email, title, description, category) VALUES("test@test.com", "title", "desc", "other")');
    if ($result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC ')){

        print("Ads:\n");

        while ($row = $result->fetch_assoc()){
            printf("%s (%s)\n", $row['email'], $row['title']);
        }
    }
    $result->close();
?>
</body>
</html>