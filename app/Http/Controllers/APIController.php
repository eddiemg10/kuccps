<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\UniversityCourse;

class APIController extends Controller
{
    //
    public function sortHolland(Request $request){
        $params = $request->all();

        $holland = $request->input('holland_code');

        $courses = Course::where('holland_code', $holland)->get();

    }
}
