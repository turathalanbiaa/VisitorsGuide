<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class Lost extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'category' => $this->category,
            'description' => $this->description,
            'datetime' => $this->datetime,
            'file_name' => $this->file_name,
            'center' => $this->center,
        ];
        //return parent::toArray($request);
    }
}
