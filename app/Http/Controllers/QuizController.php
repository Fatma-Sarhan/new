<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Quiz;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class QuizController.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:06:28am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - quiz';
        $quizs = Quiz::paginate(6);
        return view('quiz.index',compact('quizs','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - quiz';
        
        return view('quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quiz = new Quiz();

        
        $quiz->name = $request->name;

        
        $quiz->quiz_file = $request->quiz_file;

        
        
        $quiz->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new quiz has been created !!']);

        return redirect('quiz');
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
        $title = 'Show - quiz';

        if($request->ajax())
        {
            return URL::to('quiz/'.$id);
        }

        $quiz = Quiz::findOrfail($id);
        return view('quiz.show',compact('title','quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - quiz';
        if($request->ajax())
        {
            return URL::to('quiz/'. $id . '/edit');
        }

        
        $quiz = Quiz::findOrfail($id);
        return view('quiz.edit',compact('title','quiz'  ));
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
        $quiz = Quiz::findOrfail($id);
    	
        $quiz->name = $request->name;
        
        $quiz->quiz_file = $request->quiz_file;
        
        
        $quiz->save();

        return redirect('quiz');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/quiz/'. $id . '/delete');

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
     	$quiz = Quiz::findOrfail($id);
     	$quiz->delete();
        return URL::to('quiz');
    }
}
