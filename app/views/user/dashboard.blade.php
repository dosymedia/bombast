@extends('layouts.master')

@section('content')
	<h1>Welcome @{{ $user->user_display }} !</h1>
	This will be the dashboard. 
	Includes:
	<ul>
		<li>New posts</li>
		<li>Subscribed threads</li>
		<li>Announcements</li>
		<li>Recent PMs</li>
		<li>Chatbox</li>
		<li>Hot topic</li>
		<li>Thread tracker</li>
	</ul>



@stop

