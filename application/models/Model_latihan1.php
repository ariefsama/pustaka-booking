<?php 
class Model_latihan1 extends CI_Model
{
  //Membuat variable untuk menampung nilai
  public $n1, $n2, $hasil;

  //methode penjumlahan
  public function simpleSum ($nilai1, $nilai2){

  
    $this->n1 = $nilai1;
    $this->n2 = $nilai2;
    $this->hasil = $this->n1 + $this->n2;
    return $this->hasil;
  }
}

?>