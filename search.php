<?php

session_start();

require 'vendor/autoload.php';

$database = require 'core/bootstrap.php';

$search_name = $_SESSION['name'];

$table_name = $_SESSION['table'];


$details = $database->selectWhere("$table_name","$search_name");

$sn = 1;

if(count($details>=1))
	require 'views/search.view.php';