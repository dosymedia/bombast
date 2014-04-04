@extends('layouts.master')

@section('content')

	<h1>Edit</h1>
	{{ Form::model($user, ['method' => 'PATCH', 'files' => true, 'route' => ['user.update', $user->id]]) }}

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

		<img src="{{ URL::asset($user->avatar_url) }}" alt="" class="avatar">
		{{ Form::file('avatar') }} 

		{{ Form::reset('Clear') }}
		{{ Form::submit('Submit') }}
	{{ Form::close() }}

@stop