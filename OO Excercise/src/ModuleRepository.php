<?php

namespace TUDublin;

class ModuleRepository
{
    private $modules;

    function __construct() {
        $this->modules = [];

        $m1 = new Module(1,'web-dev1','COMPH6030');
        $m2 = new Module(2,'web-dev2','COMPH6033');
        $m3 = new Module(3,'web-dev3','COMPH6034');

        $this->modules[$m1->getId()] = $m1;
        $this->modules[$m2->getId()] = $m2;
        $this->modules[$m3->getId()] = $m3;
    }

    function getAll() {
        return $this->modules;
    }

    function getOne($id) {
        if (array_key_exists($id,$this->modules))
            return $this->modules[$id];
        else
            return null;
    }

}