<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Bhn_adiktif extends Model
{
    protected $guarted = [];
    use SoftDeletes;
}
