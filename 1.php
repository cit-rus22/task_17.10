<?php

class Family
{
    public $address = '';
    public $familySurname = '';

    public function peopleCount()
    {
        //
    }

}

class Father extends Family
{
    public $role = 'husband';
    public $age = '55';
    private $name = 'James';

    public function work() 
    {
        //
    }
}

class Mother extends Family
{
    public $role = 'wife';
    public $age = '54';
    private $name = 'Mary';

    public function cook()
    {
        //
    }
}

class Child extends Family
{
    public $age = '18';
    public $sex = 'male';
    private $name = 'Laura';

    public function study()
    {
        //
    }

}

?>