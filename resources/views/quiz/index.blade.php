@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Quiz Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("quiz")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New quiz</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>quiz_file</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($quizs as $quiz) 
            <tr>
                <td>{!!$quiz->name!!}</td>
                <td>{!!$quiz->quiz_file!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/quiz/{!!$quiz->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/quiz/{!!$quiz->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/quiz/{!!$quiz->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $quizs->render() !!}

</section>
@endsection