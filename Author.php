<?php 
class Author {
    public $id;
    public $name;
    public $phone;
    public $email;
    public $address;

    public function __construct($id, $name, $phone, $email, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
    }
}