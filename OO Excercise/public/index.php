<?php

// require_once __DIR__ . '/../src/Person.php';
require_once __DIR__ . '/../vendor/autoload.php';

use TUDublin\Person;

$person1 = new Person();
$person2 = new Person();

$person1->setName("matt");
$person2->setName("joelle");

print '<p> This person\'s name is ' . $person1->getName();
print '<p> This person\'s name is ' . $person2->getName();

