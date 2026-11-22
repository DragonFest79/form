<?php
if (isset($_POST["surname"]) && $_POST["surname"] != "" && isset($_POST["languages"]) && isset($_POST["places"]) && isset($_POST["time"])) {
    $surname = htmlentities($_POST["surname"]);
    $languages = $_POST["languages"];
    $places = $_POST["places"];
    $time = htmlentities($_POST["time"]);

    $output = "<!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <title>Результат реєстрації</title>
    </head>
    <body>
        Слухач $surname обрав для вивчення курси з мов
        <ul>";
    foreach ($languages as $lang) {
        $output .= "<li>" . htmlentities($lang) . "</li>";
    }
    $output .= "</ul>
        Можливе місце проведення занять:
        <ul>";
    foreach ($places as $place) {
        $output .= "<li>" . htmlentities($place) . "</li>";
    }
    $output .= "</ul>
        та година $time
    </body>
    </html>";

    echo $output;
} else {
    echo "Введені дані не коректні, заповніть всі поля";
}
?>
