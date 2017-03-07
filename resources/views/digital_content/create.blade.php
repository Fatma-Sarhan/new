@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create digital_content
    </h1>
    <form method = 'get' action = '{!!url("digital_content")!!}'>
        <button class = 'btn btn-danger'>digital_content Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("digital_content")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="content_file">content_file</label>
            <input id="content_file" name = "content_file" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection