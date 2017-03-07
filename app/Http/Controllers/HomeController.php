<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Degree;
use App\Subject;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $degrees = \App\Degree::limit(4)->get();
        $subjects = \App\Subject::all();
        return view('home',compact('degrees','subjects','roles'));
    }
   
   
}
