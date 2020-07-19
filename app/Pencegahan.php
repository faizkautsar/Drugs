<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pencegahan extends Model
{
  protected $guareted = [];
  use SoftDeletes;
}
