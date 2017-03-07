@extends('layouts.app')

@section('content')
	<div class="container">
		<form id="elasticScout" action="/search" method="get">
		     <div class="mysearchbar">
		         <input name="search" placeholder="Search...">
		       
		     </div>
		</form>
		@if(!empty($degrees))
	    @foreach($degrees as $degree)
	        <h3>{{ $degree->name }} </h3>
	    @endforeach
		@endif

	</div>
@endsection
