<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DBview extends Model
{
  protected $connection = 'mysql2';

  protected $table = 'mobile_aa_assegnazione';
}
