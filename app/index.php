<?php

require 'app/helpers.php';
require 'app/Task.php';

//$task = new Task(1,"comprar pa", "a la panaderia", 0 );
//var_dump($task);
$user='debian-sys-maint';
$pass='uMG93jWL4XPPTSpm';

$dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user, $pass);
$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');
//var_dump($tasks);
$greeting = greet();
