<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Degree;
use App\Subject;


class SearchController extends Controller
{
    public function search(Request $request)
    {

    	$string = $request->search;
    	$searchValues = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY); 
    	var_dump($searchValues);
	//    if($request->has('search')){
	      
	//       $degrees = Degree::search($request->input('search'))->get();
	//    }
	  
	 
	//    return $degrees;
	//    // return view('search', compact('degrees'));
	}
}
