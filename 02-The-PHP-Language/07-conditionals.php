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
    'January'   =>  'It is January',
    'February'  =>  'It is February',
    'March'     =>  'It is March'
);

echo isset($months[$month]) ? $months[$month] : 'Not the right month!';

echo "<br>";
$month = 'May';

if (($month !== 'May') && ($month !== 'June')) {
    echo 'Is not May or June';
} else {
    echo "It is May or June";
}

echo "<br>";
if (($month !== 'May') || ($month !== 'June')) {
    echo "It is May or June";
} else {
    echo 'Is not May or June';
}