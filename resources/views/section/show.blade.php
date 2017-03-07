@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show section
    </h1>
    <br>
    <form method = 'get' action = '{!!url("section")!!}'>
        <button class = 'btn btn-primary'>section Index</button>
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
                <td>{!!$section->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$section->description!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection