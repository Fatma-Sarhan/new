<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Digital_content;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Digital_contentController.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:07:26am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Digital_contentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - digital_content';
        $digital_contents = Digital_content::paginate(6);
        return view('digital_content.index',compact('digital_contents','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - digital_content';
        
        return view('digital_content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $digital_content = new Digital_content();

        
        $digital_content->name = $request->name;

        
        $digital_content->content_file = $request->content_file;

        
        
        $digital_content->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new digital_content has been created !!']);

        return redirect('digital_content');
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
        $title = 'Show - digital_content';

        if($request->ajax())
        {
            return URL::to('digital_content/'.$id);
        }

        $digital_content = Digital_content::findOrfail($id);
        return view('digital_content.show',compact('title','digital_content'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - digital_content';
        if($request->ajax())
        {
            return URL::to('digital_content/'. $id . '/edit');
        }

        
        $digital_content = Digital_content::findOrfail($id);
        return view('digital_content.edit',compact('title','digital_content'  ));
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
        $digital_content = Digital_content::findOrfail($id);
    	
        $digital_content->name = $request->name;
        
        $digital_content->content_file = $request->content_file;
        
        
        $digital_content->save();

        return redirect('digital_content');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/digital_content/'. $id . '/delete');

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
     	$digital_content = Digital_content::findOrfail($id);
     	$digital_content->delete();
        return URL::to('digital_content');
    }
}
