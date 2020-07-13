<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'en_name'=>$this->en_title,
            'ar_name'=>$this->ar_title,
            'date'=>$this->conference_date,
            'active'=>$this->active,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            'en_content'=>str_limit(strip_tags($this->en_text),100,'...'),
            'en_content'=>str_limit(strip_tags($this->ar_text),100,'...'),
        ];
    }
}
