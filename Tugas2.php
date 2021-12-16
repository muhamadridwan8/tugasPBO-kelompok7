<?php

class biodata{

  public $nama;
  public $umur;

  function __construct($nama,$umur){
    $this->nama = $nama;
    $this->umur = $umur;
  }

  function get_all(){
    return $this->nama." ".$this->umur."<br>";
  }


  function __destruct(){
    echo "Saya Bernama {$this->nama} dan Saya berumur {$this->umur}";
  }


}
$bio1 = new biodata("Dani Dania",19);

echo $bio1->get_all();
