@extends('layouts.app')

@section('content')
	<div class="header">
		<span class="header__title">The bot you have always, secretly needed.</span>
        <button class="button">Invite now!</button>
	</div>

	<div class="features">

		<h1 class="features__title">What Weeaboo-Detector does:</h1>

		<div class="features__container">
			<div class="feature">
				<div class="feature__wrapper">
					<div class="feature__icon">
						<i class="material-icons is-blue">
							track_changes
						</i>
					</div>
					<div class="feature__description">
						Detects weeaboos by using a wide arrange of words that weeabs are often known to say.
					</div>
				</div>
			</div>
			<div class="feature">
				<div class="feature__wrapper">
					<div class="feature__icon">
						<i class="material-icons is-purple">
							visibility
						</i>
					</div>
					<div class="feature__description">
						Puts weeaboos to shame by creating a custom rank that automatically gets assigned.
					</div>
				</div>
			</div>
			<div class="feature">
				<div class="feature__wrapper">
					<div class="feature__icon">
						<i class="material-icons is-orange">
							clear
						</i>
					</div>
					<div class="feature__description">
						Kicks weeaboos from your server when things are tending to go out of hand.
					</div>
				</div>
			</div>
			<div class="feature">
				<div class="feature__wrapper">
					<div class="feature__icon">
						<i class="material-icons is-red">
							block
						</i>
					</div>
					<div class="feature__description">
						Bans weeaboos that are a severe danger for humanity. Because someone has to do it.
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row__parallax" id="about">How does it work?</div>

	<div class="row__explanation">
		<div class="explanation__text__container is-even">
			<div class="explanation__text__wrapper">
				<h2 class="explanation__title">Weeab-Levels</h2>
				<span class="explanation__text">
					When a member types one of the blacklisted Weeab-Words, it will be added to the watchlist.
					This watchlist tracks how weeab the member is by saving a Weeab-Level.
					This Weeab-Level will increment every time a member says on the blacklisted words (see below).
				</span>
			</div>
		</div>
        <div class="explanation__side is-blue"></div>
		<div class="explanation__icon">
			<i class="material-icons is-blue">
				category
			</i>
		</div>
	</div>
	<div class="row__explanation">
		<div class="explanation__icon">
			<i class="material-icons is-orange">
				show_chart
			</i>
		</div>
        <div class="explanation__side is-orange"></div>
		<div class="explanation__text__container is-odd">
			<div class="explanation__text__wrapper">
				<h2 class="explanation__title">Server Limits</h2>
				<span class="explanation__text">
					Each server has its own customizable server limits.
					These limits indicate when a member should get assigned a rank, get kicked or banned.
					The actions will only fire when a members weeab-level has risen above one of your own defined server limits.
				</span>
			</div>
		</div>
	</div>
	<div class="row__explanation">
		<div class="explanation__text__container is-even">
			<div class="explanation__text__wrapper">
				<h2 class="explanation__title">Weeab-Words</h2>
				<span class="explanation__text">
					This bot contains a global list of words that weeaboos are know to say.
					Each one of these words has its own level that indicates how severe a word is.
					The level assigned to this word will be added the the members' Weeab-Level when spoken.
				</span>
			</div>
		</div>
        <div class="explanation__side is-red"></div>
		<div class="explanation__icon">
			<i class="material-icons is-red">
				text_format
			</i>
		</div>
	</div>
	<div class="row__explanation">
		<div class="explanation__icon">
			<i class="material-icons is-purple">
				child_friendly
			</i>
		</div>
        <div class="explanation__side is-purple"></div>
		<div class="explanation__text__container is-odd">
			<div class="explanation__text__wrapper">
				<h2 class="explanation__title">The Weeaboo rank</h2>
				<span class="explanation__text">
					When a member is starting to show the first stages of being a weeab, it will be assigned a special rank.
					This is actually just a normal Discord rank that automatically gets assigned.
					With this rank you punish the foul weeab by taking away its rights which it already didn't deserve.
				</span>
			</div>
		</div>
	</div>
@endsection
