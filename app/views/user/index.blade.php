@extends('layouts.default')
@section('content')
<h2>Users</h2>
	@if($users)

		@foreach($users as $user)
			<p>{{$user->email or "Default User Email"}}</p>
		@endforeach
	@else
		<p>There are no users here</p>
	@endif
@stop
