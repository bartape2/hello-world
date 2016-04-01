<?php

namespace Weaverryan\DangerZone;

class Product
{
  
  protected $id = null;
  protected $name = "";
  
  
  public function __cosntruct()
  {
    $this->id = 42;
    $this->name = "Teplo US";    
  }
  
  public function foo()
  {
    return $this->id.": ".$this->name;
  }
}
