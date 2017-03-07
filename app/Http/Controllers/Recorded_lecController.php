<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recorded_lec;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Recorded_lecController.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:08:47am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Recorded_lecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - recorded_lec';
        $recorded_lecs = Recorded_lec::paginate(6);
        return view('recorded_lec.index',compact('recorded_lecs','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - recorded_lec';
        
        return view('recorded_lec.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recorded_lec = new Recorded_lec();

        
        $recorded_lec->name = $request->name;

        
        $recorded_lec->lec_file = $request->lec_file;

        
        
        $recorded_lec->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new recorded_lec has been created !!']);

        return redirect('recorded_lec');
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
        $title = 'Show - recorded_lec';

        if($request->ajax())
        {
            return URL::to('recorded_lec/'.$id);
        }

        $recorded_lec = Recorded_lec::findOrfail($id);
        return view('recorded_lec.show',compact('title','recorded_lec'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - recorded_lec';
        if($request->ajax())
        {
            return URL::to('recorded_lec/'. $id . '/edit');
        }

        
        $recorded_lec = Recorded_lec::findOrfail($id);
        return view('recorded_lec.edit',compact('title','recorded_lec'  ));
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
        $recorded_lec = Recorded_lec::findOrfail($id);
    	
        $recorded_lec->name = $request->name;
        
        $recorded_lec->lec_file = $request->lec_file;
        
        
        $recorded_lec->save();

        return redirect('recorded_lec');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/recorded_lec/'. $id . '/delete');

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
     	$recorded_lec = Recorded_lec::findOrfail($id);
     	$recorded_lec->delete();
        return URL::to('recorded_lec');
    }
}
