<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Majales extends Model
{
    protected $table = "majales";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function user() {
        return $this->belongsTo('App\Models\User', "user_id", "id");
    }
}
