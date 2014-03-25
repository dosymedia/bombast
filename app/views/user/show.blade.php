@extends('layouts.master')

@section('content')
	<div class="profile">
	

		<h1> {{{ $user->user_display }}} 	</h1>
		<h2> ({{{ $user->user_name }}}) 		</h2>
		<h3> Located in {{{ $user->user_location }}}, Joined {{{ $user->created_at }}} </h3>

		<div class="socialbar">
			<a href="#"><img src="{{ URL::asset('img/x.gif') }}" alt="Social"></a>
			<a href="#"><img src="{{ URL::asset('img/x.gif') }}" alt="Social"></a>
			<a href="#"><img src="{{ URL::asset('img/x.gif') }}" alt="Social"></a>
			<a href="#"><img src="{{ URL::asset('img/x.gif') }}" alt="Social"></a>
			<a href="#"><img src="{{ URL::asset('img/x.gif') }}" alt="Social"></a>
			<a href="#"><img src="{{ URL::asset('img/x.gif') }}" alt="Social"></a>
		</div>

		<p class="introduction">
			<img src="{{ URL::asset('img/admin.png') }}" alt="" class="avatar">
			{{{ $user->user_intro }}}
		</p>

		{{ $user->user_posts }} posts

		<h4> Limitations </h4>
		<ul class="limits">
			<li><strong>Limit: </strong> I will write this. (user_limit) 	</li>
			<li><strong>Limit: </strong> I will not write this. (user_limit)			</li>
			<li><strong>Triggers: </strong> bronies, flowers, sprinkles (user_trigger)	</li>
		</ul>

		<div class="listaccounts">
			<table cellspacing="0">
				<caption> Terri's Characters </caption>
				
				<tr>
					<th scope="col">  </th>
					<th scope="col"> Character </th>
					<th scope="col"> Member Group </th>
				</tr>
				
				<tr>
					<td> <img src="{{ URL::asset('img/01.png') }}" /> </td>
					<td> Mischa Collins </td>
					<td> Group </td>
				</tr>
				
				<tr>
					<td> <img src="{{ URL::asset('img/02.png') }}" /> </td>
					<td> Hugh Dancy </td> 
					<td> Group </td> 
				</tr> 
				
				<tr> 
					<td> <img src="{{ URL::asset('img/03.png') }}" /> </td>
					<td> Chris Pine </td> 
					<td> Group </td> 
				</tr> 
			</table>
		</div>

		
	</div>
@stop