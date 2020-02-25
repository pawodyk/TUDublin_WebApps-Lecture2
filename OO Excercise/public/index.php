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
use TUDublin\Module;

$s1 = new Student(1,'Matt', "Doe",'007');
$s2 = new Student(2, 'Joelle', 'Murphy', '321');

$m1 = new Module(1,'web-dev1','COMPH6030');
$m2 = new Module(2,'web-dev2','COMPH6033');
$m3 = new Module(3,'web-dev3','COMPH6034');


print '<h2>Student 1</h2>';
print '<p>' . var_dump($s1) . '</p>';
print '<p>' . print_r($s1) . '</p>';

print '<hr>';

print '<h2>Student 2</h2>';
print '<p>' . var_dump($s2) . '</p>';
print '<p>' . print_r($s2) . '</p>';

print '<hr>';

print '<h2>Module 1</h2>';
print '<p>' . var_dump($m1) . '</p>';
print '<p>' . print_r($m1) . '</p>';

print '<hr>';

print '<h2>Module 2</h2>';
print '<p>' . var_dump($m2) . '</p>';
print '<p>' . print_r($m2) . '</p>';

print '<hr>';

print '<h2>Module 3</h2>';
print '<p>' . var_dump($s2) . '</p>';
print '<p>' . print_r($s2) . '</p>';

print '<hr>';