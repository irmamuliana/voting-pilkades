<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseDetailResource extends JsonResource
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
            'title'             =>  $this->title,
            'slug'              =>  $this->slug,
            'description'       =>  $this->description, 
            'publish'           =>  $this->publish,
            'instructor'        =>  $this->user,
            'category'          =>  $this->category,
            'price'             =>  $this->price,
            'video_preview_url' =>  $this->video_preview_url,
            'created_at'        =>  $this->created_at,
            'sections'          =>  $this->sections->load('lessons')
        ];
    }
}
