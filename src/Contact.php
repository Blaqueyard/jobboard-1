<?php

public class Contact {

    private $phone;
    private $email;
    private $address;

    function __construct($phone, $email, $address) {
      $this->phone = $phone;
      $this->email = $email;
      $this->address = $address;
    }
}

 ?>
