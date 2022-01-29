<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'theme',
        'content',
        'path_to_video'
    ];
    /**
     * @return mixed
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
