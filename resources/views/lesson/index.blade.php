@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Lesson Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("lesson")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New lesson</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>description</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($lessons as $lesson) 
            <tr>
                <td>{!!$lesson->name!!}</td>
                <td>{!!$lesson->description!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/lesson/{!!$lesson->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/lesson/{!!$lesson->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/lesson/{!!$lesson->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $lessons->render() !!}

</section>
@endsection