<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Degree;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Image; 

use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

/**
 * Class DegreeController.
 *
 * @author  The scaffold-interface created at 2017-02-18 06:59:10am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - degree';
        $degrees = Degree::paginate(6);
        return view('degree.index',compact('degrees','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - degree';
        
        return view('degree.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $degree = new Degree();

        
        $degree->name = $request->name;

        
        $degree->description = $request->description;

        
        
        $degree->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new degree has been created !!']);

        return redirect('degree');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - degree';

        if($request->ajax())
        {
            return URL::to('degree/'.$id);
        }

        $degree = Degree::findOrfail($id);
        return view('degree.show',compact('title','degree'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - degree';
        if($request->ajax())
        {
            return URL::to('degree/'. $id . '/edit');
        }

        
        $degree = Degree::findOrfail($id);
        return view('degree.edit',compact('title','degree'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $degree = Degree::findOrfail($id);
    	
        $degree->name = $request->name;
        
        $degree->description = $request->description;

        if (Input::hasFile('icon'))
        {
            $icon = $request->icon ;
            $iconName =  Carbon::now(). '.' .$request->file('icon')-> getClientOriginalExtension();
            $degree->icon = '/degreesimages/'.$iconName;
            $path = public_path('degreesimages/' . $iconName);
            Image::make($icon->getRealPath())->resize(100, 100)->save($path);
        }
        else
        {
            $degree->icon =  $degree->icon ;
        }


        $degree->save();

        return redirect('degree');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/degree/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$degree = Degree::findOrfail($id);
     	$degree->delete();
        return URL::to('degree');
    }

    /* New functions */

   
}
