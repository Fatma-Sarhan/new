@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <div class="box box-primary">
       <div class="box-header">
            <h3>Create new Degree</h3>
        </div>
       {{--  <form method = 'get' action = '{!!url("degree")!!}'>
            <button class = 'btn btn-danger'>degree Index</button>
        </form> --}}
        <div class="box-body">
           
            <form method = 'POST' action = '{!!url("degree")!!}' enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="name">name</label>
                    <input id="name" name = "name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <input id="description" name = "description" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="icon">icon</label>
                    <input id="icon" name = "icon" type="file" class="">
                </div>

                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
    </div>
</section>
@endsection