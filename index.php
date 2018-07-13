<?php
$file = file_get_contents(__DIR__ . "/data.json");
$data = json_decode($file, true);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Домашнее задание к лекции 2.1 «Установка и настройка веб-сервера»</title>
    <meta charset="UTF-8">
</head>

<body>

<section>
    <h1>Телефонная книга</h1>
    <table>
        <thead>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Адрес</th>
            <th>Телефон</th>
        </tr>
        </thead>
        <tbody>
        <? foreach ($data as $item){ ?>
            <tr>
                <td><?php echo $item['firstName']; ?></td>
                <td><?php echo $item['lastName']; ?></td>
                <td><?php echo $item['address']; ?></td>
                <td><?php echo $item['phoneNumber']; ?></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</section>
</body>
</html>