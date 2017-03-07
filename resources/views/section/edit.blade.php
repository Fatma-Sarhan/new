@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit section
    </h1>
    <form method = 'get' action = '{!!url("section")!!}'>
        <button class = 'btn btn-danger'>section Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("section")!!}/{!!$section->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$section->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control" value="{!!$section->
            description!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection