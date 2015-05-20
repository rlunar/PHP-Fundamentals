<?php 

require 'functions.php';
require 'config.php';

$conn = connect($config['DB_HOST'], $config['DB_USERNAME'], $config['DB_PASSWORD'], $config['DB_NAME']);

$results = query('SELECT * FROM users', $conn);

require 'index.view.php';
