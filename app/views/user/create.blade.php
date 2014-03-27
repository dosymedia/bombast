@extends('layouts.master')

@section('content')

	<h1>Register</h1>
	{{ Form::open(['route' => 'user.store']) }}

		{{ $errors->first('user_name') }}
		{{ Form::label('user_name', 'Username:') }}
		{{ Form::text('user_name') }}

		{{ Form::label('user_display') }}
		{{ Form::text('user_display') }}

		{{ Form::label('email', 'Email:') }}
		{{ Form::email('email') }}
		
		{{ $errors->first('password') }}
		{{ Form::label('password', 'Password:') }}
		{{ Form::password('password') }}

		{{ Form::label('user_location') }}
		{{ Form::text('user_location') }}

		{{ Form::label('user_intro') }}
		{{ Form::textarea('user_intro') }}

		{{ Form::label('user_gender')}}
		{{ Form::radio('user_gender', 'Male') }} Male
		{{ Form::radio('user_gender', 'Female') }} Female


		{{ Form::reset('Clear') }}
		{{ Form::submit('Submit') }}
	{{ Form::close() }}
@stop