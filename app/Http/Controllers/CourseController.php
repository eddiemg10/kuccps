<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Course::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Course::find($id);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function recommend(){
        /*
        TODO:
        =======================

        ********* KENDI & ABBY *********  
        > Download the courses.xlsx file in app/database/seeders/courses.xlsx and fill in the holland codes of the courses
        > The holland codes you use should correspond to those that a test would give someone, so also find the best holland code
          test you can
        > When done, run php artisan migrate:fresh --seed and make sure there are no errors in the migrations

        ********* NATE *********  
        > Check which params have been sent. If only grades, filter by only grades. If only personality, 
          filter by only personality (Holland Code). If both, filter by both

        FOR GRADES:
        Two possible approaches
            
            1.  Cutoff is calculated in the mobile app then sent as a param in the GET request 
                e.g. /courses?points=23.2. This value is then used to filter courses
            
            2.  (Preferred) Exam marks sent along with the request (Maybe POST request or just a long GET req) then 
                the points are calculated by the api server to fulter the courses

        Either way, figure out an algorithm to estimate cluster points given KCSE results (subjects will be hard coded)
        =======================
        */
    }
}
