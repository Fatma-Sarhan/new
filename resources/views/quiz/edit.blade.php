@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit quiz
    </h1>
    <form method = 'get' action = '{!!url("quiz")!!}'>
        <button class = 'btn btn-danger'>quiz Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("quiz")!!}/{!!$quiz->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$quiz->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="quiz_file">quiz_file</label>
            <input id="quiz_file" name = "quiz_file" type="text" class="form-control" value="{!!$quiz->
            quiz_file!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection