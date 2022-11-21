<?php

require 'app/helpers.php';
require 'app/Task.php';
require 'config.php';



$user=$config['database']['user'];
$pass=$config['database']['password'];
$type = $config['database']['databasetype'];
$host = $config['database']['host'];
$name = $config['database']['name'];
$dsn = "$type:host=$host;dbname=$name";


$dbh = new PDO($dsn, $user, $pass);
$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');
//var_dump($tasks);
$greeting = greet();
