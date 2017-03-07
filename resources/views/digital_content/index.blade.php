@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Digital_content Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("digital_content")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New digital_content</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>content_file</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($digital_contents as $digital_content) 
            <tr>
                <td>{!!$digital_content->name!!}</td>
                <td>{!!$digital_content->content_file!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/digital_content/{!!$digital_content->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/digital_content/{!!$digital_content->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/digital_content/{!!$digital_content->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $digital_contents->render() !!}

</section>
@endsection