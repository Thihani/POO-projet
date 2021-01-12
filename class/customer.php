<?php
class Customer
{
    private $id;
    private $first_name;
    private $last_name;
    private $address;
    private $postal_code;
    private $city;

    public function __construct($id, $first_name, $address)
    {
        $this->id=$id;
        $this->first_name=$first_name;
        $this->address=$address;
    }
    
    public function getID()
    {
        return $this ->id;
    }

    public function getFirst_name()
    {
        return $this -> first_name;
    }

    public function getAddress()
    {
        return $this -> address;
    }
}