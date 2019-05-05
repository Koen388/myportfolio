<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{

    public function dashboard(){

        $courses = \App\Course::all();

        return view('./pages/dashboard', [
            
            'courses' => $courses
        ]);
    }
}