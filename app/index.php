<?php

require 'config.php';
require 'app/helpers.php';
require 'app/Task.php';

$task = fetchAllTasks(connectDB($config));

$greeting = greet();
