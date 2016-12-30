<?php

session_start();

require 'vendor/autoload.php';

$database = require 'core/bootstrap.php';


if(isset($_POST['name']) && isset($_POST['table']))
{
	
	$search_name = mysql_real_escape_string($_POST['name']);
	

	$table_name = mysql_real_escape_string($_POST['table']);
	

	$_SESSION['table'] = $table_name;
	

	$_SESSION['name'] = $search_name;

	if(!empty($search_name)){

		if(strlen($search_name)>=4){

			$details = $database->selectWhere("$table_name","$search_name");

			if(count(($details))>=1){
				
				header('Location: search.php');
			
			}else{
				
				echo '<div class="container" style="color:red;"><h1>No results found<h1></div>';
			
			}
		}else{

			
				echo '<div class="container" style="color:red;"><h1>Your Keyword must be 4 characters or more</h1></div>';
		}

	}else{
		
		echo '<div class="container" style="color:red;"><h1>Please enter a name to search.</h1></h1>';

	}


}


require 'views/index.view.php';
