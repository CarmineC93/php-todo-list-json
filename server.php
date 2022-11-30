<?php

//prelevo i dati nel file json che vengono richiamati come stringa
$string = file_get_contents("todo.json");
//con  decode trasforma la stringa in array associativo
$todos = json_decode($string, true);

if (isset($_POST["text"])) {
    $text = $_POST["text"];

    $todos[] = [
        "text" => $text,
        "done" => false
    ];

    //var_dump($todos); //non funziona perchè? server.php

    file_put_contents("todo.json", json_encode($todos));
} elseif (isset($_POST["toggleIndex"])) {
    $todoIndex = $_POST["toggleIndex"];
    $todos[$todoIndex]["done"] = !$todos[$todoIndex]["done"];
    file_put_contents("todo.json", json_encode($todos));
} elseif (isset($_POST["deleteIndex"])) {
    $todoIndex = $_POST["deleteIndex"];
    array_splice($todos, $todoIndex, 1);
    file_put_contents("todo.json", json_encode($todos));
}

header("Content-Type: application/json");
echo json_encode($todos);
