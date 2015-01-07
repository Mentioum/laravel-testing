@extends('layouts.default')
@section('content')
<h2>Users</h2>
	@if($users)
		<ul>
			@foreach($users as $user)
				<h3>{{{ $user -> title }}}</h3>
				<p>{{ $user -> email }}</p>
				<p>{{{ $user -> body }}}</p>
			@endforeach
		</ul>
	@else
		<p>There are no users here</p>
	@endif
@stop
