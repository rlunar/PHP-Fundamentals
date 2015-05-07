<?php 

$names = ['Roberto', 'Paty', 'Santy', 'Adrian', 'Laura', 'Rossy'];

foreach ($names as $name) {
    echo '<li>' . $name . '</li>';
}


$titles = array(
    'owner' =>  'Santy',
    'cto'   =>  'Roberto',
    'ceo'   =>  'Paty'
);


echo "<br>";
foreach ($titles as $title => $name) {
    echo '<li><strong>' . $title . '</strong> - ' . $name . '</li>';    
}


echo "<br>";
for ($i = 0; $i < 10; ++$i) {
    echo "<li>$i</li>";
}


echo "<br>";
for ($i = 0; $i < count($names); ++$i) {
    echo '<li>' . $names[$i] .'</li>';
}


echo "<br>";
$i = 0;
while ($i < count($names)) {
    echo '<li>' . $names[$i] .'</li>';
    ++$i;
}


echo "<br>";
$i = 0;
do {
	echo '<li>' . $names[$i] .'</li>';
	++$i;
} while ($i < count($names));
