<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * @return mixed
     */
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    /**
     * @return mixed
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
