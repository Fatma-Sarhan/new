<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class SectionController.
 *
 * @author  The scaffold-interface created at 2017-02-18 09:38:01am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - section';
        $sections = Section::paginate(6);
        return view('section.index',compact('sections','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - section';
        
        return view('section.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $section = new Section();

        
        $section->name = $request->name;

        
        $section->description = $request->description;

        
        
        $section->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new section has been created !!']);

        return redirect('section');
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
        $title = 'Show - section';

        if($request->ajax())
        {
            return URL::to('section/'.$id);
        }

        $section = Section::findOrfail($id);
        return view('section.show',compact('title','section'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - section';
        if($request->ajax())
        {
            return URL::to('section/'. $id . '/edit');
        }

        
        $section = Section::findOrfail($id);
        return view('section.edit',compact('title','section'  ));
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
        $section = Section::findOrfail($id);
    	
        $section->name = $request->name;
        
        $section->description = $request->description;
        
        
        $section->save();

        return redirect('section');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/section/'. $id . '/delete');

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
     	$section = Section::findOrfail($id);
     	$section->delete();
        return URL::to('section');
    }

    
}
