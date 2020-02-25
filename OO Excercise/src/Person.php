<?php
namespace TUDublin;

class Person {
    public $name;

    function __toString() {
        return 'This Person\'s name is ' . $this->name;
    }
}