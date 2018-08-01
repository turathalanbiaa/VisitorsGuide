<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $table = "point";
    protected $primaryKey = "id";
    public $timestamps = false;
}
