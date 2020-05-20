<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hukum extends Model
{
    protected $guarted = [];

    protected $hidden = ['created_at','updated_at'];
}
