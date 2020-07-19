<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rehabilitasi extends Model
{
    protected $guarted = [];
    use SoftDeletes;
    protected $hidden = ['created_at','updated_at'];


}
