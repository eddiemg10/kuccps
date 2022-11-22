<?php

namespace App\Models;

use App\Models\UniversityCourse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function universityCourses()
    {
        return $this->hasMany(UniversityCourse::class);
    }

    public function holland(){
        return $this->belongsToMany(Holland::class)
    }
}
