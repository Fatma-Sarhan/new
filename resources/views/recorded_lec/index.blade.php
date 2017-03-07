@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Recorded_lec Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("recorded_lec")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New recorded_lec</button>
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
            @foreach($recorded_lecs as $recorded_lec) 
            <tr>
                <td>{!!$recorded_lec->name!!}</td>
                <td>{!!$recorded_lec->lec_file!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/recorded_lec/{!!$recorded_lec->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/recorded_lec/{!!$recorded_lec->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/recorded_lec/{!!$recorded_lec->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $recorded_lecs->render() !!}

</section>
@endsection