@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit online_lec
    </h1>
    <form method = 'get' action = '{!!url("online_lec")!!}'>
        <button class = 'btn btn-danger'>online_lec Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("online_lec")!!}/{!!$online_lec->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$online_lec->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="lec_file">lec_file</label>
            <input id="lec_file" name = "lec_file" type="text" class="form-control" value="{!!$online_lec->
            lec_file!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection