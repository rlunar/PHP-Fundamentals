<?php

require 'config.php';

# mysql_connect('localhost', 'username', 'password');

$letter = 'r'; // temporary

try {
	$conn = new PDO('mysql:host='.$config['DB_HOST'].';dbname='.$config['DB_NAME'], $config['DB_USERNAME'], $config['DB_PASSWORD']);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	

	/*

	$stmt->setFetchMode(PDO::FETCH_OBJ);
	
	$stmt = $conn->prepare('SELECT * FROM users WHERE email LIKE :letter');
	
	$stmt->execute(array(
		'letter' => $letter . '%'
	));
	
	$result = $stmt->fetchAll();

	while($row = $stmt->fetch()) {
		print_r($row);
	}

	*/



	$stmt = $conn->prepare('INSERT INTO users(email) VALUES(:email)');

	$stmt->bindParam('email', $email, PDO::PARAM_STR);

	// Multiple bindings. Cool, huh?
	$users = array('AmyDoe@example.com', 'BobbyDoe@example.com', 'CliffDoe@example.com');
	foreach($users as $email) {
		$stmt->execute();
	}


	/*
	// Will throw reference error
	$stmt->bindParam(':letter', $letter . '%', PDO::PARAM_STR);
	$stmt->execute();

	*/


} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}
