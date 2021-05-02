@extends('_layouts.main')

<script defer src="{{ mix('js/meetup.js', 'assets/build') }}"></script>

@section('title', 'Find Events')

@section('hero-media')
		<video autoplay loop muted playsinline>
			<source src="/assets/video/video-optimized-further.mp4"
			type="video/mp4">
			<!-- TODO: a still image here as a fallback -->
			Sorry, your browser doesn't support embedded videos.
		</video>
@endsection

@section('hero-content')
		<h1>Find Events</h1>
		<p>Let us do the legwork. Pick an event you like, and we'll help you take your first steps in volunteering, no experience or special training required.</p>
		<a href="https://www.meetup.com/BostonVolunteer/about/" class="bv-button bv-hero-button">Sign up on Meetup.com</a>
@endsection

@section('content')
<div class="bv-content-container">
	<div id="bv-calendar"></div>
</div>
@endsection
