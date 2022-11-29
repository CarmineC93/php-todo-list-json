<?php
//prelevo i dati nel file json e li trasformo in stringa
$string = file_get_contents("todo.json");
$todos = json_decode($string, true);

var_dump($todos);
