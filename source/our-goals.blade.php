@extends('_layouts.main')

@section('title', 'Our Goals')

@section('hero-media')
		<video autoplay loop muted playsinline>
			<source src="/assets/video/video-optimized-further.mp4"
			type="video/mp4">
			<!-- TODO: a still image here as a fallback -->
			Sorry, your browser doesn't support embedded videos.
		</video>
@endsection

@section('hero-content')
		<h1>Our Goals</h1>
		<p>We believe that to grow, we must always ask questions - and strive for a better Boston. Here are some of the questions we're asking now.</p>
		<a href="#" class="bv-button bv-hero-button">Hello!</a>
@endsection

@section('body')
<div class="bv-wide">
	<section class="bv-goal">
		<div class="bv-goal-intro">
			<h2>How can we ensure local residents have the opportunities they need to succeed?</h2>
			<p>Josh: provide an answer to this question here, preferably related to action items.</p>
		</div>
		<aside class="bv-action">
			<h3>What we need to get there</h3>
			<ul class="bv-checklist">
				<li>Two new board members to nurture and support the existing Boston Volunteers team</li>
				<li>A plan of action to keep new volunteers safe while helping in person</li>
				<li>An expanded framework for remote volunteering</li>
			</ul>
		</aside>
	</section>
	<section class="bv-goal">
		<div class="bv-goal-intro">
			<h2>What can we do to improve access to top-quality education?</h2>
			<p>Josh: provide an answer to this question here, preferably related to action items.</p>
		</div>
		<aside class="bv-action">
			<h3>What we need to get there</h3>
			<ul class="bv-checklist">
				<li>Action item one</li>
				<li>Action item two</li>
				<li>Action item three</li>
			</ul>
		</aside>
	</section>
	<section class="bv-goal">
		<div class="bv-goal-intro">
			<h2>How can we most effectively make Boston cleaner, healthier, and even better?</h2>
			<p>Josh: provide an answer to this question here, preferably related to action items.</p>
		</div>
		<aside class="bv-action">
			<h3>What we need to get there</h3>
			<ul class="bv-checklist">
				<li>Action item one</li>
				<li>Action item two</li>
				<li>Action item three</li>
			</ul>
		</aside>
	</section>
</div>
@endsection
