<?php 

$names = ['Roberto', 'Paty', 'Santy'];

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
for ($i = 0; $i < 10; $i++) {
    echo "<li>$i</li>";
}

echo "<br>";
for ($i = 0; $i < count($names); $i++) {
    echo '<li>' . $names[$i] .'</li>';
}

echo "<br>";
$i = 0;
while ($i < 3) {
    echo '<li>' . $names[$i] .'</li>';
    $i++;
}