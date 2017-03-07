@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit digital_content
    </h1>
    <form method = 'get' action = '{!!url("digital_content")!!}'>
        <button class = 'btn btn-danger'>digital_content Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("digital_content")!!}/{!!$digital_content->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$digital_content->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="content_file">content_file</label>
            <input id="content_file" name = "content_file" type="text" class="form-control" value="{!!$digital_content->
            content_file!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection