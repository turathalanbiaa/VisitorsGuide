<?php

namespace App\Models;

use App\Enums\LostCategory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Lost extends Model
{
    use Searchable;
    protected $table = "lost";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function center()
    {
        return $this->belongsTo('App\Models\Center', 'center_id', 'id');
    }

   public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'category' => lostCategory::getCategory($this->category),
            'description' => $this->description,
            'datetime' => $this->datetime,
            'name' => $this->center['name'],
            't_number' => $this->center['t_number'],
        ];
       /* $array = $this->toArray();

        $array['name'] = $this->center['name'];
        $array['t_number'] = $this->center['t_number'];
        return $array;*/
    }
    public function searchableAs()
    {
        return 'losts_index';
    }

}
