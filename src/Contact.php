<?php

class Contact {

    private $phone;
    private $email;
    private $address;

    function __construct($phone, $email, $address) {
      $this->phone = $phone;
      $this->email = $email;
      $this->address = $address;
    }

    function getPhone() {
      return $this->phone;
    }
    function getEmail() {
      return $this->email;
    }
    function getAddress() {
      return $this->address;
    }
    function setPhone($new_phone) {
      $this->phone = $new_phone;
    }
    function setEmail($new_email) {
      $this->email = $new_email;
    }
    function setAddress($new_address) {
      $this->address = $new_address;
    }
}

 ?>
