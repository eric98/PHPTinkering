<?php

require 'models/Task.php';
require 'bootstrap/bootstrap.php';

$tasks = $query->fetchAll('tasks');

require 'versio13.view.php';

//require 'models/Patatas.php';
//require 'bootstrap/bootstrap.php';
//
//$tasks = $query->fetchAll('patatas');
//
//require 'patatas.view.php';