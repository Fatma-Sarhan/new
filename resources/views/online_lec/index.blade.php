@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Online_lec Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("online_lec")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New online_lec</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>lec_file</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($online_lecs as $online_lec) 
            <tr>
                <td>{!!$online_lec->name!!}</td>
                <td>{!!$online_lec->lec_file!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/online_lec/{!!$online_lec->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/online_lec/{!!$online_lec->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/online_lec/{!!$online_lec->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $online_lecs->render() !!}

</section>
@endsection