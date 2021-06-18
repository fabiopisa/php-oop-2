<?php
require_once __DIR__. '/User.php';

class UserPremium extends User{

  private $addDiscount = 5;

  public function setDiscount($_age){
    if($_age >65){
      $this->discount = 20 + $this->addDiscount;
    }elseif($this->studentDiscount === true){
      $this->discount = 15 + $this->addDiscount;
    }elseif($_age<18){
      $this->discount = 10 + $this->addDiscount;
    }
  }
}

?>