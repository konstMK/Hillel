<?php

class UsernameNotSetException extends Exception
{
  public $code;
  
  public function __construct($message, $code)
  {
    parent::__construct($message, $code);
  }

}