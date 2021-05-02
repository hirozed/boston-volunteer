@extends('_layouts.main')

@section('title', 'Our Goals')

@section('hero-media')
		<video autoplay loop muted playsinline>
			<source src="/assets/video/pexels-thirdman-7654895.mp4"
			type="video/mp4">
			<!-- TODO: a still image here as a fallback -->
			Sorry, your browser doesn't support embedded videos.
		</video>
@endsection

@section('hero-content')
		<h1>Our Goals</h1>
		<p>We believe that to grow, we must always ask questions - and strive for a better Boston. Here are some of the questions we're asking now.</p>
@endsection

@section('body')
<section class="bv-goal">
	<div class="bv-goal-intro">
		<h2>How can we ensure local residents have the opportunities they need to succeed?</h2>
		<p>If you’re dedicated and want to make a big impact, then this might be of interest to you. If you agree that all MA residents should have the opportunity to succeed, then we’d love to hear from you. If you have real leadership experience, then please email josh@bostonvolunteer.org Let’s get to work!
</p>
	</div>
	<aside class="bv-action">
		<h3>What we need to get there</h3>
		<ul class="bv-checklist">
			<li>Two new board members to nurture and support the existing Boston Volunteers team</li>
			<li>A plan of action to keep new volunteers safe while helping in person</li>
			<li>An expanded framework for remote volunteering</li>
		</ul>
		<p><strong>Will you be the one to take our 11,000 strong corps to the next level?</strong></p>
		<a href="/get-involved" class="bv-button">Join our board</a>
	</aside>
</section>
<section class="bv-goal">
	<div class="bv-goal-intro">
		<h2>What can we do to improve access to top-quality education?</h2>
		<p>We’ve recorded dozens of books for residents who are blind . We’ll do it again soon. We’re organizing another community centered book drive for More Than Words in the South end. We hope you can join us! We have upcoming events with the Harriet Tubman house in the South End where we’ll tutor kids and empower them to earn their GEDs. Let’s get to work!</p>
	</div>
	<aside class="bv-action">
		<h3>What we need to get there</h3>
		<ul class="bv-checklist">
			<li>Action item one</li>
			<li>Action item two</li>
			<li>Action item three</li>
		</ul>
		<p><strong>Do you have what it takes to crack the equitable education code?</strong></p>
		<a href="/get-involved" class="bv-button">Organize an event</a>
	</aside>
</section>
<section class="bv-goal">
	<div class="bv-goal-intro">
		<h2>How can we most effectively make Boston cleaner, healthier, and even better?</h2>
		<p>We have a great event coming up, one of my favorites, where we’ll kayak the Chales and remove water chestnuts that our damaging our river. Let’s get our hands dirty! We have a fun event coming up at the Harvest Soup Kitchen. There’s enormous need, especially in these times. Let’s get to work! We have a unique event coming up near Jamaica Pond. It’s one of our most popular annual events and will make our town even cleaner. Let’s get it done!</p>
	</div>
	<aside class="bv-action">
		<h3>What we need to get there</h3>
		<ul class="bv-checklist">
			<li>Action item one</li>
			<li>Action item two</li>
			<li>Action item three</li>
		</ul>
		<p><strong>Are you ready to make measurable change in your neighborhood?</strong></p>
		<a href="/get-involved" class="bv-button">Volunteer your time</a>
	</aside>
</section>
@endsection
