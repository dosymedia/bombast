@extends('layouts.master')

@section('content')
	{{ Form::open(['route' => 'session.store']) }}
		{{ Form::label('email', 'Email:') }}
		{{ Form::email('email') }}

		{{ Form::label('password', 'Password:') }}
		{{ Form::password('password') }}

		{{ Form::submit('Login') }}
	{{ Form::close() }}
@stop