<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorReception extends Model
{
    protected $table = "visitor_reception";
    protected $primaryKey = "id";
    public $timestamps = false;
}
