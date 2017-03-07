<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subject;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class SubjectController.
 *
 * @author  The scaffold-interface created at 2017-02-18 08:59:29am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - subject';
        $subjects = Subject::paginate(6);
        return view('subject.index',compact('subjects','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - subject';
        
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subject = new Subject();

        
        $subject->name = $request->name; 
        $subject->description = $request->description;
        $subject->start_date = $request->start_date;
        $subject->end_date = $request->end_date;
        // will be cont.
        
        $subject->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new subject has been created !!']);

        return redirect('subject');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $title = 'Show - subject';

        if($request->ajax())
        {
            return URL::to('subject/'.$id);
        }

        $subject = Subject::findOrfail($id);
        // return $id;
        return view('subject.show',compact('title','subject'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - subject';
        if($request->ajax())
        {
            return URL::to('subject/'. $id . '/edit');
        }

        
        $subject = Subject::findOrfail($id);
        return view('subject.edit',compact('title','subject'  ));
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
        $subject = Subject::findOrfail($id);
    	
        $subject->name = $request->name;
        
        $subject->description = $request->description;
        
        
        $subject->save();

        return redirect('subject');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/subject/'. $id . '/delete');

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
     	$subject = Subject::findOrfail($id);
     	$subject->delete();
        return URL::to('subject');
    }

    /* By fatma */

    public function view($id, Request $request)
    {

        $subject = Subject::findOrfail($id);
        // return $id;
        return view('subject.view',compact('subject'));
    }

    
}
