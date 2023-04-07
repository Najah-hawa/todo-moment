<?php

$json = file_get_contents('todo.json');
$todos  = json_decode($json);

foreach ($todos as $value) {
    unset($todos[count($todos) - 1]);
}

$newArray = array_values($todos);
$newArray = json_encode($newArray);
file_put_contents('./todo.json', $newArray);

header('Location: index.php');