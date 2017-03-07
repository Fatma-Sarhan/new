<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class LessonController.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:04:21am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - lesson';
        $lessons = Lesson::paginate(6);
        return view('lesson.index',compact('lessons','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - lesson';
        
        return view('lesson.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lesson = new Lesson();

        
        $lesson->name = $request->name;

        
        $lesson->description = $request->description;

        
        
        $lesson->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new lesson has been created !!']);

        return redirect('lesson');
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
        $title = 'Show - lesson';

        if($request->ajax())
        {
            return URL::to('lesson/'.$id);
        }

        $lesson = Lesson::findOrfail($id);
        return view('lesson.show',compact('title','lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - lesson';
        if($request->ajax())
        {
            return URL::to('lesson/'. $id . '/edit');
        }

        
        $lesson = Lesson::findOrfail($id);
        return view('lesson.edit',compact('title','lesson'  ));
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
        $lesson = Lesson::findOrfail($id);
    	
        $lesson->name = $request->name;
        
        $lesson->description = $request->description;
        
        
        $lesson->save();

        return redirect('lesson');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/lesson/'. $id . '/delete');

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
     	$lesson = Lesson::findOrfail($id);
     	$lesson->delete();
        return URL::to('lesson');
    }

    public function list()
    {
        $lessons = Lesson::all();
        return view('list',compact('lessons'));
    }
}
