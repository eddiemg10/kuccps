<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityCourse extends Model
{
    use HasFactory;

    public function courses()
    {
        // code...
        public function course()
        {
            // code...
            return $this->belongsTo(Course::class);
        }
    }
}
