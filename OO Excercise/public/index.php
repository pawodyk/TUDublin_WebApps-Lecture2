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
use TUDublin\ModuleRepository;

$s1 = new Student(1,'Matt', "Doe",'007');
$s2 = new Student(2, 'Joelle', 'Murphy', '321');

$modRepo = new ModuleRepository();

$mods = $modRepo->getAll();

print 'length of array = ' . sizeof($mods);
print PHP_EOL;

foreach ($mods as $m){
    print PHP_EOL . ' ================ ' . PHP_EOL;
    print $m;
}



$m1 = $modRepo->getOne(1);
$m2 = $modRepo->getOne(100);

$mods = [$m1, $m2];

foreach ($mods as $m){
    print PHP_EOL . PHP_EOL;
    if (!is_null($m)){
        print $m;
    }
    else {
        print "*** Module not found **";
    }
}
