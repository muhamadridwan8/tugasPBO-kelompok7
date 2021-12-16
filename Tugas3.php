<?php

class KB { //kesehatan battery
   public $fc;
   protected $dc;
  
   public function __construct($fc, $dc) {
     $this->fc = $fc;
     $this->dc = $dc;
   }
}

class hitung extends KB {
   public function hitung_KB() {
		 $x = round(($this->fc/$this->dc)*100,2);
     return $x. "%";
   }

	 public function __destruct() {
	   echo "Keterangan:<br>
				>60% = masih baik<br>
                <60% = waktunya ganti<br>";
	 }
}
  
$KB_suci = new hitung(28.220,30.000);
  
echo "KB suci adalah = ".$KB_suci->hitung_KB()."<hr>";
?>