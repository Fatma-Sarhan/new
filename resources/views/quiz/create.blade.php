@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create quiz
    </h1>
    <form method = 'get' action = '{!!url("quiz")!!}'>
        <button class = 'btn btn-danger'>quiz Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("quiz")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="quiz_file">quiz_file</label>
            <input id="quiz_file" name = "quiz_file" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection