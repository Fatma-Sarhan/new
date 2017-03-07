@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create section
    </h1>
    <form method = 'get' action = '{!!url("section")!!}'>
        <button class = 'btn btn-danger'>section Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("section")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection