@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create recorded_lec
    </h1>
    <form method = 'get' action = '{!!url("recorded_lec")!!}'>
        <button class = 'btn btn-danger'>recorded_lec Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("recorded_lec")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="lec_file">lec_file</label>
            <input id="lec_file" name = "lec_file" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection