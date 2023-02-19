<?php


namespace App\classes;


class HelloWorld
{
    public $firstName, $lastName;

    public function __construct()
    {
        $this->firstName = 'Hasan ';
        $this->lastName = 'Muhammad';
    }

    public function index()
    {
        echo $this->firstName;
        echo $this->lastName;
    }
}