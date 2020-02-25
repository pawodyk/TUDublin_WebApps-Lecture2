<?php

// require_once __DIR__ . '/../src/Person.php';
require_once __DIR__ . '/../vendor/autoload.php';

use TUDublin\Person;

$person1 = new Person();
$person2 = new Person();

$person1->name = "matt";
$person2->name = "joelle";

print '<p>' . $person1;
print '<p>' . $person2;

