@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
                <h3>All subjects</h3>
        </div>
        <div class="box-body">
             <a href="{{url('degree/create')}}" class = "btn btn-success"><i class="fa fa-plus fa-md" aria-hidden="true"></i> New</a>
           {{--  <form class = 'col s3' method = 'get' action = '{!!url("subject")!!}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New subject</button>
            </form> --}}
            <br>
            <br>
            <table class = "table table-hover" style = 'background:#fff'>
                <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach($subjects as $subject) 
                    <tr>
                        <td>{!!$subject->name!!}</td>
                        <td><div style="width: 560px">{!!$subject->description!!}</div></td>
                        <td>
                            <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-sm' data-link = "/subject/{!!$subject->id!!}/deleteMsg" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            <a href = '#' class = 'viewEdit btn btn-primary btn-sm' data-link = '/subject/{!!$subject->id!!}/edit'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href = '#' class = 'viewShow btn btn-warning btn-sm' data-link = '/subject/{!!$subject->id!!}'><i class="fa fa-info" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
            {!! $subjects->render() !!}
        </div>
    </div>
</section>
@endsection