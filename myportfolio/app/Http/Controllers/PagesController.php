<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('./pages/index');
    }

    public function contact(){
        return view('./pages/contact');
    }

    // public function dashboard(){
    // return view('./pages/dashboard', [
    //     'tasks' => ['Task 1, Task 2, Task 3']
    // ]);
    // }

    public function opdrachten(){
        return view('./pages/opdrachten');
        }
}


