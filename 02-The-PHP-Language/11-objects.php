<?php

$person = new stdClass;
$person->first = "John";
$person->last = "Doe";
$person->job = "Teacher";

var_dump($person);
echo $person->first.' '.$person->last.' is a '.$person->job."\n";

class Person {
	public $name;
	public $job;
	
	public function __construct ($name, $job) {
		$this->name = $name;
		$this->job = $job;
	}
	
	public function communicate ($style = 'voice') {
		return "Communicating with ".$style;
	}
}

$p = new Person('John', 'Teacher');
echo $p->communicate('telepathy')."\n";


$person = array(
	'first' => 'John',
	'last' => 'Doe'
);

var_dump($person);

echo $person['first']."\n";

$o = (object) $person;

echo $o->first;

var_dump($o);