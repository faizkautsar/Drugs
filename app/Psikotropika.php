<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Psikotropika extends Model
{
  protected $guarted = [];
  use SoftDeletes;
}
