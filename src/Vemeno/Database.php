<?php

namespace Vemeno;

class Database
{
  
  protected $db = null;
  
  
  public function __construct()
  {
    $this->db = true;    
  }
  
  public function foo()
  {
    return "bar";
  }
}
