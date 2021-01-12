<?php
class CustomerList
{
    private $customerlist;

    public function __construct(Customer $Customer)
    {
        $this -> customer = $Customer;
    }

    public function getCustomerList()
    {
        return $this -> customer;
    }
}