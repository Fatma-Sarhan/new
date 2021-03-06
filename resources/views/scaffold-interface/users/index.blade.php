@extends('scaffold-interface.layouts.app')
@section('content')
<section class="content">
<div class="box box-primary">
<div class="box-header">
	<h3>All Users</h3>
</div>
	<div class="box-body">
		<a href="{{url('/users/create')}}" class = "btn btn-success"><i class="fa fa-plus fa-md" aria-hidden="true"></i> New</a>
		<table class = "table table-hover">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Verified</th>
			<th>Roles</th>
			<th>Permissions</th>
			<th>Actions</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				{{-- <td>{{$user->password}}</td> --}}
				 @if($user->verified == 1)
				 <td>
				 	<a href="/user/{{$user->id}}/cp-verify" class="btn btn-outline-success "><i class="fa fa-check" style="color:green"></i></a>
				 </td>
				@else
				<td>
				 	<a href="/user/{{$user->id}}/cp-verify" class="btn btn-outline-danger"><i class="fa fa-times" style="color:red"></i></a>
				</td>
				 @endif
				 
				<td>
				@if(!empty($user->roles))
					@foreach($user->roles as $role)
					<small class = 'label bg-blue'>{{$role->name}}</small>
					@endforeach
				@else
					<small class = 'label bg-red'>No Roles</small>
				@endif
				</td>
				<td>
				@if(!empty($user->permissions))
					@foreach($user->permissions as $permission)
					<small class = 'label bg-orange'>{{$permission->name}}</small>
					@endforeach
				@else
					<small class = 'label bg-red'>No Permissions</small>
				@endif
				</td>
				<td>
					<a href="{{url('/users/edit')}}/{{$user->id}}" class = 'btn btn-primary btn-sm'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
					<a href="{{url('users/delete')}}/{{$user->id}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>
</section>
@endsection
