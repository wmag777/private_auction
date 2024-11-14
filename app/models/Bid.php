<?php
class Bid {

    private $name;
    private $email;
    private $company;
    private $position;
    private $amount;
    private $message;
    public function __construct() {
        $this->name = $_REQUEST['name'];
        $this->email = $_REQUEST['email'];
        $this->company = $_REQUEST['company'];
        $this->position = $_REQUEST['position'];
        $this->amount = $_REQUEST['amount'];
        $this->message = $_REQUEST['message'];
    }

    public function save() {
        // Save to database logic here
    }
}
