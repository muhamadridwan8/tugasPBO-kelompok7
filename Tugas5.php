<?php
class KB{
  public $fc;
  protected $dc;

  public function __construct ($fc, $dc){
    $this->fc = $fc;
    $this->dc = $dc;
  }
}
final class hitung extends KB {
  public function hitung_KB() {
     $x = round(($this->fc/$this->dc)*100,2);
     return $x. "%";
  }
  final public function __destruct(){
    echo "keterangan:<br>
        >80% = sangat baik<br>
        >60% = masih baik<br>
        <60% = waktunya ganti<br>";
  }
  }
    $KB_tono = new hitung(19.540,46.991);

echo "kesehatan batrai tono adalah = ".$KB_tono->hitung_KB()."<hr>";
?>
  
