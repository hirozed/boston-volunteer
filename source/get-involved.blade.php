@extends('_layouts.main')

@section('title', 'Get Involved')

@section('hero-media')
		<video autoplay loop muted playsinline>
			<source src="/assets/video/pexels-julia-m-cameron-6893742.mp4"
			type="video/mp4">
			<!-- TODO: a still image here as a fallback -->
			Sorry, your browser doesn't support embedded videos.
		</video>
@endsection

@section('hero-content')
	<h1>Get Involved</h1>
	<p>Let us help you grow while growing your community.</p>
@endsection

@section('content')
<section class="bv-get-involved">
	<h2 class="bv-center">We make it easy to help, no matter what your schedule is.</h2>
	<p>Josh, please write a paragraph about how easy it is to help here and the different levels of time commitment. Maybe something inspirational. Keep it to about twice this length.</p>
	<div class="bv-impact">
		<aside class="bv-commit">
			<h3>Volunteer</h3>
			<p class="bv-commitment">Low commitment, minimal time</p>
			<p>Get involved with your community without significant hassle or time commitments, or test the waters to see what volunteering is like. Pick any opportunity you're interested in that's convenient for you, and we'll handle the rest.</p>
			<a href="https://www.meetup.com/BostonVolunteer/events/" class="bv-button">Find an event</a>
		</aside>
		<aside class="bv-commit">
			<h3>Organize an Event</h3>
			<p class="bv-commitment">Low commitment, medium time</p>
			<p>Connect with the forces of Boston Volunteer by organizing your own volunteer event. Direct our community to the areas of greatest need and multiply your impact on your schedule. Just let us know how we can help.</p>
			<a href="/organize-events" class="bv-button">Organize an event</a>
		</aside>
		<aside class="bv-commit">
			<h3>Donate your skills</h3>
			<p class="bv-commitment">Medium commitment, flexible time</p>
			<p>Everyone has a superpower. What's yours? We need support of all sorts at the organizational level. Tell us how you think your skillset could help Boston Volunteer grow, and we'll help you grow your career in the process.</p>
			<a href="mailto:josh@bostonvolunteer.org" class="bv-button">Contact Josh</a>
		</aside>
		<aside class="bv-commit">
			<h3>Become an Organizer</h3>
			<p class="bv-commitment">Medium commitment, structured time</p>
			<p>If you are looking to grow in your leadership skills, or give back at the leadership level, we need people who can help grow, shape, and direct Boston Volunteer. We need voices of all levels of experience and backgrounds.</p>
			<a href="mailto:josh@bostonvolunteer.org" class="bv-button">Contact Josh</a>
		</aside>
	</div>
</section>
<section class="bv-center">
	<h2 class="bv-center">Still not sure about joining us?</h2>
	<p>Read our story. We think you'll be impressed&mdash;and hopefully, inspired to take action.</p>
	<a href="/our-story" class="bv-button">Read our story</a>
</section>
@endsection
