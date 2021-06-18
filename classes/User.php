<?php
require_once __DIR__ .'/Control.php';
class User{
  use Control;
  public $name;
  public $gender;
  public $age;
  protected $creditDate;
  public $creditValid;
  private $discount = 0;
  public $studentDiscount= false;

  public function __construct($_name,$_gender,$_age,$_studentDiscount, $_creditDate)
  {
    $this->name = $_name;
    $this->gender = $_gender;
    $this->creditDate = $_creditDate;
    $this->setAge($_age);
    $this->studentDiscount = $_studentDiscount;
    $this->setDiscount($_age,$_studentDiscount);
    $this->setCreditDiscount($_creditDate);
  }

  public function setAge($_age){
    try{
      $this->controlAge($_age);
    }catch ( Exception $e) {
      echo $e->getMessage();
    }
  }

  public function setDiscount($_age){
    if($_age >65){
      $this->discount = 20;
    }elseif($this->studentDiscount === true){
      $this->discount = 15;
    }elseif($_age<18){
      $this->discount = 10;
    }
  }

  public function setCreditDiscount($_creditDate){
    if($_creditDate < 2021 ){
      $this->creditValid = 'scaduta';
    }else{
      $this->creditValid = 'accettata';
    }
  }
}

?>