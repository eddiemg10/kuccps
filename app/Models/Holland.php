<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holland extends Model
{
    use HasFactory;

    public function users()
    {
        // code...
        return $this->belongsToMany(User::class);
    }

    public function courses(){
        return $this->belongsToMany(Course::class);
    }
}
