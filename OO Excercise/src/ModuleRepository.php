<?php

namespace TUDublin;

class ModuleRepository
{
    private $module;

    function __construct() {
        $this->module = [];

        $m1 = new Module(1,'web-dev1','COMPH6030');
        $m2 = new Module(2,'web-dev2','COMPH6033');
        $m3 = new Module(3,'web-dev3','COMPH6034');

        $this->module[$m1->getId()] = $m1;
        $this->module[$m2->getId()] = $m2;
        $this->module[$m3->getId()] = $m3;
    }

    function getAll() {
        return $this->module;
    }

}