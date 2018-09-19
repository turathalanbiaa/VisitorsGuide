<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class VisitorReception extends Model
{
    use Searchable;
    protected $table = "visitor_reception";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
}
