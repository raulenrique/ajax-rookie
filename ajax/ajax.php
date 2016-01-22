<?php

//Get all the data from the request
$note = $_GET['note'];

//Connect to the database
$dbc = new mysqli( 'localhost', 'raulmalqui_ajax', 'yoobee01', 'raulmalqui_ajax_beaches' );

//Filter the note
$note = $dbc->real_escape_string($_GET['note']);

//Prepare insert query
$sql = "INSERT INTO notes VALUES (NULL, '$note', CURRENT_TIMESTAMP )" ;

//Run the SQL
$dbc->query