@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h3>Show subject </h3>
        </div>
        <br>
        <div class="box-body">
            <form method = 'get' action = '{!!url("subject")!!}'>
                <button class = 'btn btn-primary'>subject Index</button>
            </form>
            <br>
            <table class = 'table'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <b><i>name : </i></b>
                        </td>
                        <td>{!!$subject->name!!}</td>
                    </tr>
                    <tr>
                        <td>
                            <b><i>description : </i></b>
                        </td>
                        <td>{!!$subject->description!!}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection