<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
	<?php 
		// $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July');
		$months = ['January', 'February', 'March', 'April', 'May', 'June', 'July']; 
		var_dump($months);
		
		array_push($months, 'August');
		echo $months[4] . '<br>';
		print_r($months);
		
		array_push($months, 'September');
		foreach ($months as $month) {
			echo '<li>'.$month.'</li>';
		}

		array_unshift($months, '2014');
		var_dump($months);

		var_dump(array_slice($months, 1, 2));
		
		var_dump(array_filter($months, function($item) { return strlen($item) == 3; } ) );
	?>
	<h1>Tuts+ Sites</h1>
	<?php 
		$tuts_sites = array(
			'nettuts' => 'http://net.tutsplus.com',
			'psdtuts' => 'http://psd.tutsplus.com',
			'wptuts' => 'http://wp.tutsplus.com',
		);

		foreach ($tuts_sites as $name => $url) {
			echo '<li><a href="' . $url . '">' . ucwords($name) . '+</a></li>';
		}

		$last = array_pop($tuts_sites);

		echo '<br>';

		foreach ($tuts_sites as $name => $url) : ?>
			<li>
				<a href="<?= $url; ?>"><?= ucwords($name); ?>+</a>
			</li>
	<?php 
		endforeach;
		echo $last;
	?>

	</body>
</html>