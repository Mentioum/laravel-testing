@extends('layouts.default')

@section('content')
<h2>Showing User #{{ $id }}</h2>


<p>Email: {{ $user->email }}</p>
@stop
