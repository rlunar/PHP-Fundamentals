<?php

require 'functions.php';

use Blog\DB;

$conn = DB\connect($config);

if ( $conn ) {
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 25;

    $row = DB\query("SELECT * FROM users WHERE id = :id",
                  array('id' => $id),
                  $conn)[0];
}
?>
<html>
<head>
    <title></title>
</head>
<body>

    <?php if ( $row ) : ?>
    <h1><?= $row['email'];?>'s Profile</h1>
    
    <?php else: ?>
        <h1>No User</h1>
    <?php endif; ?>

</body>
</html>
