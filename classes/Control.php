<?php

  trait Control{

    //controlliamo i parametri del prezzo
    public function controlPrice($_price){
      if(!is_numeric($_price) || $_price <=0 || empty($_price)){
        throw new Exception('Prezzo non valido!');
      }else{
        $this->price = $_price;
      }
    }
    //controlliamo l'età secondo cui un minore di 16 non può accedere al sito più i controlli con try e cath nell'user
    public function controlAge($_age){
      if(!is_int($_age) || $_age <=16 || empty($_age)){
        throw new Exception('Età non valida!');
      }else{
        $this->age = $_age;
      }
    }
    //BONUS: controlliamo la data di scadenza della carta di credito e stampiamo il messaggio apposito per non rivelare dati sensibili
    public function controlCreditDate($_creditDate){
      if($_creditDate < date('m-Y') ){
        $this->creditValid = 'scaduta';
      }else{
        $this->creditValid = 'accettata';
      }
    }
  }
?>