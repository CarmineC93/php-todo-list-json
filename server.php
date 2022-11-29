<?php
//prelevo i dati nel file json e li trasformo in stringa
$string = file_get_contents("todo.json");
$todos = json_decode($string, true);

if (isset($_POST["newTodo"])) {
    $new_todo = $_POST["newTodo"];
    $todos[] = $new_todo;
}

header("Content-Type: application/json");
echo json_encode($todos);
