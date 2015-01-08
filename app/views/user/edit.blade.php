@extends('layouts.default')


@section('content')
	<h2>Form</h2>
	{{ Form::model($user, array('route' => array('user.update', $user->id))) }}

		<li>
			{{ Form::label('email', 'Your Email') }}
			{{ Form::email('email') }}
		</li>
		<li>
			{{ Form::label('password', 'Your Password') }}
			{{ Form::password('password') }}
		</li>
		<li>
			{{ Form::label('permission', 'Your Permission') }}
			{{ Form::select('permission', array('1' => 'Administrator', '2' => 'Member')) }}
		</li>
		<li>
			{{ Form::submit('Save') }}
		</li>

	{{ Form::close() }}



@stop