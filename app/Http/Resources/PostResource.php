<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Conference_gallery;

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
        $result =  [
            'id' => $this->id,
            'en_name'=>(string) $this->en_title,
            'ar_name'=>(string) $this->ar_title,
            'date'=>(string) $this->conference_date,
            'active'=>(integer)$this->active,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            'en_content'=>str_limit(strip_tags($this->en_text),100,'...'),
            'en_content'=>str_limit(strip_tags($this->ar_text),100,'...'),
            
        ];

    $childs = Conference_gallery::where('conference_id','=', $this->id)->get();
   
    
    // $child = Conference_gallery::collection($this->id);
     if (!$childs->isEmpty()) {

        // $childresult =[
        //     'id'    => $this->gallery->id,
        //     'image'  =>asset('uploads/conferance/' .$this->gallery->image),
        //     'active'  => (integer) $this->gallery->active,
                   
        // ];
        // foreach($childs as $child){
            $result['child'] =ImageResource::collection($childs);
        // }
   
     }
     else{
        $result['child'] =[];
     }

    return $result;
       
    }
}
