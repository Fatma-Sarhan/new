@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h3>Edit Degree</h3>
        </div>
        <div class="box-body">
            {{-- <form method = 'get' action = '{!!url("subject")!!}'>
                <button class = 'btn btn-danger'>subject Index</button>
            </form> --}}
            <br>
            <form method = 'POST' action = '{!! url("subject")!!}/{!!$subject->
                id!!}/update'> 
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="name">name</label>
                    <input id="name" name = "name" type="text" class="form-control" value="{!!$subject->
                    name!!}"> 
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <input id="description" name = "description" type="text" class="form-control" value="{!!$subject->
                    description!!}"> 
                </div>
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </div>
</section>
@endsection