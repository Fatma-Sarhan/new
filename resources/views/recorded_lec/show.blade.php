@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show recorded_lec
    </h1>
    <br>
    <form method = 'get' action = '{!!url("recorded_lec")!!}'>
        <button class = 'btn btn-primary'>recorded_lec Index</button>
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
                <td>{!!$recorded_lec->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>lec_file : </i></b>
                </td>
                <td>{!!$recorded_lec->lec_file!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection