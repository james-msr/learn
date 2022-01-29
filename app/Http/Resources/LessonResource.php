<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LessonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'subject' => new SubjectResource($this->whenLoaded('subject')),
            'theme' => $this->theme,
            'content' => $this->content,
            'video' => $this->path_to_video,
        ];
    }
}
