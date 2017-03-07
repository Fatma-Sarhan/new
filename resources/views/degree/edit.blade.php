@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h3>Edit Degree</h3>
        
        {{-- <form method = 'get' action = '{!!url("degree")!!}' >
            <button class = 'btn btn-danger'>All Degrees</button>
        </form> --}}
        </div>
        <br>
        <div class="box-body">
            <form method = 'POST' action = '{!! url("degree")!!}/{!!$degree->
                id!!}/update' enctype="multipart/form-data"> 
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="name">name</label>
                    <input id="name" name = "name" type="text" class="form-control" value="{!!$degree->
                    name!!}"> 
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <input id="description" name = "description" type="text" class="form-control" value="{!!$degree->
                    description!!}"> 
                </div>
                <div class="form-group">
                    <label for="icon">icon</label>
                    <input id="icon" name = "icon" type="file" class="" value="{!!$degree->icon!!}">
                </div>
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </div>
</section>
@endsection