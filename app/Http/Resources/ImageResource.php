<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Conference_gallery;

class ImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
     

       return[
            'id'=> $this->id,
            'image'  =>asset('uploads/conferance/' .$this->image),
            'active'  => (integer) $this->active,
                   
        ];
    

   
       
    }
}
