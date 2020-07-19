<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Narkotika extends Model
{
    protected $guarted = [];
    use SoftDeletes;

}
