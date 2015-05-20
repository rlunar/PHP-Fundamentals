<?php

require 'classes/html.php';

?>
<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>

	<?= HTML::link('about/index.php', 'About Us'); ?>
    <br>
	<?= HTML::image('http://d2o0t5hpnwv4c1.cloudfront.net/2100_node/preview.png', 'Node.js'); ?>
    <br>
    <?= HTML::ul(array('item', 'item2', 'item3')); ?>

</body>
</html>
