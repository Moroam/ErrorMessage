<?php

/**
 * Trait ErrorMessage
 *
 * @version 1.0.0
 */
trait ErrorMessage {
  protected $error = "";
  protected $errno = 0;
  
  public function __get(string $name) {
    if($name == "error"){
      return $this->error;
    }
    if($name == "errno"){
      return $this->errno;
    }

    throw new Exception("Property '$name' does not exist", 1);
  }

  protected function ok() : bool {
    $this->error = "";
    $this->errno = 0;
    return true;
  }

  protected function err(string $error = "Error", int $errno = 1, bool $exception = false) : bool {
    $this->error = $error;
    $this->errno = $errno;
    if($exception){
      throw new Exception($error, $errno);
    }
    return false;
  }
}
