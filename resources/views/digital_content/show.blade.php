@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show digital_content
    </h1>
    <br>
    <form method = 'get' action = '{!!url("digital_content")!!}'>
        <button class = 'btn btn-primary'>digital_content Index</button>
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
                <td>{!!$digital_content->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>content_file : </i></b>
                </td>
                <td>{!!$digital_content->content_file!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection