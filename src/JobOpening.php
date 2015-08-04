<?php

class JobOpening {

  private $title;
  private $des;

  function __construct($title, $des) {
      $this->title = $title;
      $this->des = $des;
  }

  function setTitle($new_title) {
      $this->title = $new_title;
  }
  function getTitle() {
      return $this->title;
  }
  function setDes($new_des) {
      $this->des = $new_des;
  }
  function getDes() {
      return $this->des;
  }
}

 ?>
