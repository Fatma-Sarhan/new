@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show quiz
    </h1>
    <br>
    <form method = 'get' action = '{!!url("quiz")!!}'>
        <button class = 'btn btn-primary'>quiz Index</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$quiz->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>quiz_file : </i></b>
                </td>
                <td>{!!$quiz->quiz_file!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection