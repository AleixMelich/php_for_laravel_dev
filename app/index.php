<?php

require 'app/helpers.php';
require 'app/Task.php';
require 'config.php';

$dbh = new PDO(
    $config['database']['databasetype'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['name'],
    $config['database']['user'],
    $config['database']['password']);

$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');
//var_dump($tasks);
$greeting = greet();
