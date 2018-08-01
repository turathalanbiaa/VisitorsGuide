<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
    protected $table = "lost";
    protected $primaryKey = "id";
    public $timestamps = false;
}
