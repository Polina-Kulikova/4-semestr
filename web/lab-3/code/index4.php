<!doctype html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Куликова Полина</title>
</head>
<body>
    <div id="form">
        <form action="save.php" method="post">

            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="category">Категории</label>
            <select name="category" required>
                <option value="cars">Cars</option>
                <option value="dolls">Dolls</option>
            </select>

            <label for="title">Заголовок</label>
            <input type="text" name="title" required>

            <label for="description">Описание</label>
            <textarea rows="3" name="description"></textarea>

            <input type="submit" value="Сохранить">
        </form>
    </div>
    <div id="table">
        <table>
            <thead>
                <th>Категория</th>
                <th>Заголовок</th>
                <th>Описание</th>
            </thead>
            <tbody>

            <?php
            $categories = scandir('categories');
            foreach ($categories as $category) {
                if (is_dir("categories/$category") && $category != '.' && $category != '..') {
                    $subcategories = scandir("categories/$category");
                    foreach ($subcategories as $subcategory) {
                        if ($subcategory != '.' && $subcategory != '..') {
                            $filePath = "categories/$category/$subcategory";
                            $fp = fopen($filePath, 'r');
                            $desc = "";
                            $email = "";
                            while ($line = fgets($fp)) {
                                if (filter_var($line, FILTER_VALIDATE_EMAIL)) {
                                    $email = $line;
                                } else {
                                    $desc .= $line;
                                }
                            }
                            fclose($fp);

                            echo '<tr>';
                            echo "<td>$category</td>";
                            echo "<td>".substr($subcategory, 0, strlen($subcategory) - 4)."</td>";
                            echo "<td>$desc</td>";
                            echo '</tr>';
                        }
                    }
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>