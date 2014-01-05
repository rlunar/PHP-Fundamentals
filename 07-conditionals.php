<?php 
$month = 'January';

if ($month == 'January') {
	echo 'It is January';
} else if ($month == 'February') {
	echo 'It is February';
} else {
	echo 'Not the right month!';
}

echo "<br>";

switch ($month) {
	case 'January':
		echo 'It is Jan';
		break;
	case 'February':
		echo 'It is Feb';
		break;
	default:
		echo 'Not the right month!';
}

echo "<br>";

$months = array(
	'January'	=>	'It is January',
	'February'	=>	'It is February',
	'March'		=>	'It is March'
);

echo $months[$month];