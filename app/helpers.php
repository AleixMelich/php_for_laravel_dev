<?php

function greet(){
$name = htmlspecialchars($_GET['name']);
$surname = $_GET['surname'];

return "Hola $name $surname !";
}

function dd($xivato){
    var_dump($xivato);
    die();
}
function connectDB($config){ //Dependency injection
    return new PDO(
        $config['database']['databasetype'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['name'],
        $config['database']['user'],
        $config['database']['password']);
}
