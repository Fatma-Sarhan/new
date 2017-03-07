<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Online_lec;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Online_lecController.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:07:59am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Online_lecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - online_lec';
        $online_lecs = Online_lec::paginate(6);
        return view('online_lec.index',compact('online_lecs','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - online_lec';
        
        return view('online_lec.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $online_lec = new Online_lec();

        
        $online_lec->name = $request->name;

        
        $online_lec->lec_file = $request->lec_file;

        
        
        $online_lec->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new online_lec has been created !!']);

        return redirect('online_lec');
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
        $title = 'Show - online_lec';

        if($request->ajax())
        {
            return URL::to('online_lec/'.$id);
        }

        $online_lec = Online_lec::findOrfail($id);
        return view('online_lec.show',compact('title','online_lec'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - online_lec';
        if($request->ajax())
        {
            return URL::to('online_lec/'. $id . '/edit');
        }

        
        $online_lec = Online_lec::findOrfail($id);
        return view('online_lec.edit',compact('title','online_lec'  ));
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
        $online_lec = Online_lec::findOrfail($id);
    	
        $online_lec->name = $request->name;
        
        $online_lec->lec_file = $request->lec_file;
        
        
        $online_lec->save();

        return redirect('online_lec');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/online_lec/'. $id . '/delete');

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
     	$online_lec = Online_lec::findOrfail($id);
     	$online_lec->delete();
        return URL::to('online_lec');
    }
}
