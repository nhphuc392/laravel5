<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
  public function __construct() {
    $this->created_at = date('Y-m-d',$this->created_at);
  }

}
