<?php

use Framework\Database\Database;

require 'config.php';
require 'app/helpers.php';

$database = new Database($config);
$tasks = $database ->selectAll('tasks');
//$tasks = Database::selectAll('tasks');
//$tasks = Task::selectAll('tasks');


$greeting = greet();
