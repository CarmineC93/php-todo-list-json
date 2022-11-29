<?php
//prelevo i dati nel file json e li trasformo in stringa
$string = file_get_contents("todo.json");
$todos = json_decode($string, true);

if (isset($_POST["newTodo"])) {
    $new_todo = $_POST["newTodo"];

    $newToDo = [
        "text" => $new_todo,
        "done" => false
    ];

    $todos[] = $newToDo;

    file_put_contents("todo.json", json_encode($todos));
};

header("Content-Type: application/json");
echo json_encode($todos);
