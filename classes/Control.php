<?php

  trait Control{
    public function controlPrice($_price){
      if(!is_numeric($_price) || $_price <=0 || empty($_price)){
        throw new Exception('Prezzo non valido!');
      }else{
        $this->price = $_price;
      }
    }

    public function controlAge($_age){
      if(!is_int($_age) || $_age <=16 || empty($_age)){
        throw new Exception('Età non valida!');
      }else{
        $this->age = $_age;
      }
    }
  }
?>