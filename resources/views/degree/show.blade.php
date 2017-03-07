@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <div class="box box-primary">
       <div class="box-header">
            <h3>Show Degree </h3>
        </div>
        <br>
        <div class="box-body">
            {{-- <form method = 'get' action = '{!!url("degree")!!}'>
                <button class = 'btn btn-primary'>degree Index</button>
            </form>
            <br> --}}
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
                        <td>{!!$degree->name!!}</td>
                    </tr>
                    <tr>
                        <td>
                            <b><i>description : </i></b>
                        </td>
                        <td>{!!$degree->description!!}</td>
                    </tr>
                     <tr>
                        <td>
                            <b><i>Icon :  </i></b>
                        </td>
                        <td><img src="{!!$degree->icon!!}" width="150px" height="150px"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection