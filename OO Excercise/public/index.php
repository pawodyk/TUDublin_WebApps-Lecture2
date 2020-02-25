<?php

// require_once __DIR__ . '/../src/Person.php';
require_once __DIR__ . '/../vendor/autoload.php';

/* Ex 1.1 - 1.4
use TUDublin\Person;

$person1 = new Person("matt");
$person2 = new Person("joelle");

//$person1->setName("matt");
//$person2->setName("joelle");

print '<p> This person\'s name is ' . $person1->getName();
print '<p> This person\'s name is ' . $person2->getName();
*/


/* Ex 1.5+ */

use TUDublin\Student;

$s1 = new Student(1,'Matt', "Doe",'007');
$s2 = new Student(2, 'Joelle', 'Murphy', '321');

print '<h2>Student 1</h2>';
print '<p>' . var_dump($s1) . '</p>';
print '<p>' . print_r($s1) . '</p>';

print '<hr>';

print '<h2>Student 2</h2>';
print '<p>' . var_dump($s2) . '</p>';
print '<p>' . print_r($s2) . '</p>';
