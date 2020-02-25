<?php
namespace TUDublin;

class Person {
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    function __toString() {
        return 'This Person\'s name is ' . $this->name;
    }
}