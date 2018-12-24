<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $myName = 'Железный человек';
    $myAge = '26';
    $myMail = 'IRONMAN@NAMNORI.com';
    $myCity = 'Город-герой Москва';
    $aboutMe = 'Гений, миллиардер, плейбой, филантроп';
?>
<div>
    <h2>Страница пользователя <?= $myName ?></h2>
    <p>Имя: <strong><?= $myName ?></strong></p>
    <p>Возраст: <strong><?= $myAge ?></strong></p>
    <p>Адрес электронной почты: <strong><a href="http://www.wallpaperez.org/wallpaper/movie/Iron-Man-2008-1486.jpg"></a><?= $myMail ?></strong></p>
    <p>Город: <strong><?= $myCity ?></strong></p>
    <p>О себе: <strong><?= $aboutMe ?></strong></p>
</div>
</body>
</html>