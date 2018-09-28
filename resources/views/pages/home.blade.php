@extends('layouts.app')

@section('content')
	<div class="home__header">
		<span class="home__header__title">The bot you always, secretly needed.</span>
	</div>

	<div class="home__features">

		<h1 class="home__features__title">What Weeaboo-Detector does:</h1>

		<div class="home__features-container">
			<div class="home__feature">
				<div class="home__feature__wrapper">
					<div class="home__feature__icon">
						<i class="material-icons is-blue">
							track_changes
						</i>
					</div>
					<div class="home__feature__description">
						Detects weeaboos by using a wide arrange of words that weeabs are often known to say.
					</div>
				</div>
			</div>
			<div class="home__feature">
				<div class="home__feature__wrapper">
					<div class="home__feature__icon">
						<i class="material-icons is-purple">
							visibility
						</i>
					</div>
					<div class="home__feature__description">
						Puts weeaboos to shame by creating a custom rank that automatically gets assigned.
					</div>
				</div>
			</div>
			<div class="home__feature">
				<div class="home__feature__wrapper">
					<div class="home__feature__icon">
						<i class="material-icons is-orange">
							clear
						</i>
					</div>
					<div class="home__feature__description">
						Kicks weeaboos from your server when things are tending to go out of hand.
					</div>
				</div>
			</div>
			<div class="home__feature">
				<div class="home__feature__wrapper">
					<div class="home__feature__icon">
						<i class="material-icons is-red">
							block
						</i>
					</div>
					<div class="home__feature__description">
						Bans weeaboos that are a severe danger for humanity. Someone has to do it.
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
