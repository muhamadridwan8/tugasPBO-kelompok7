<?php
  class cekEmail extends Exception {
    public function pesanError() {
      //pesan error
      $error_msg = 'Error caught on line '.$this->getLine().' in '.$this->getFile()
        .': <b>'.$this->getMessage().'</b> Email salah';
      return $error_msg;
    }
  }

  $email = "Tono@gmail.com";

  try {
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    
      throw new customException($email);
    }
    
    if(strpos($email, "Tono") !== FALSE) {
      throw new Exception("$email <br> Email anda benar");
    }
  }
  catch (customException $e) {
    echo $e->pesan_Error();
  }
  catch(Exception $e) {
    echo $e->getMessage();
  }
?>