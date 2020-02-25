<?php

namespace TUDublin;

class Student{
    private $id;
    private $firstName;
    private $surname;
    private $phoneNumber;

    public function __construct($id, $firstName, $surname, $phoneNumber)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->phoneNumber = $phoneNumber;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }




}