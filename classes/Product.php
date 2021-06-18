<?php
require_once __DIR__ . '/Control.php';
class Product{

  use Control;
  public $name;
  public $price;
  public $id;
  public $description;
  public $category = 'Prodotto generico';

  public function __construct($_name,$_price,$_id)
  {
    $this->name = $_name;
    $this->setPrice($_price);
    $this->id = $_id;
  }

  public function setPrice($_price){
    try{
      $this->controlPrice($_price);
    }catch ( Exception $e) {
      echo $e->getMessage();
    }
  }


}

?>