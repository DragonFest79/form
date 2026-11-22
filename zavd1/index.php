<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Форма-відповідь</title>
</head>
<body>
    <h3>Ваша відповідь:</h3>
    <form method="GET">
        <p>Email<br>
        <input type="text" name="email"></p>
        <p>Коментар<br>
        <textarea name="comment"></textarea></p>
        <input type="submit" value="Надіслати">
    </form>

    <?php
    if (isset($_GET["email"]) && isset($_GET["comment"])) {
        $email = htmlentities($_GET["email"]);
        $comment = htmlentities($_GET["comment"]);

        if ($email == "" || $comment == "") {
            echo "<p>Результат відповіді:</p>";
            echo "<p>Введіть дані форми</p>";
        } else {
            $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
            echo "<p>Результат відповіді:</p>";
            if (preg_match($pattern, $email)) {
                echo "<p>Перевірка адреси пройдена успішно</p>";
                echo "<p>Дані успішно надіслані</p>";
            } else {
                echo "<p>Перевірка адреси не пройдена!</p>";
            }
        }
    }
    ?>
</body>
</html>
