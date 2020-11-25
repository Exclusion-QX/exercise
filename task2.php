<?php

/**
 * Сonnect to server
 */
$link = mysqli_connect('localhost', 'root', 'root', 'test')
or die("Ошибка " . mysqli_error($link));

$objectId = 2;

$query = "SELECT * FROM users JOIN objects ON users.object_id = objects.id WHERE objects.id = $objectId";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

mysqli_close($link);
