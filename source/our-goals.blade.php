@extends('_layouts.main')

@section('title', 'Our Goals')

@section('body')
<section class="bv-content">
	<section class="bv-hero">
		<div class="bv-hero-video">
			<video autoplay loop muted playsinline>
				<source src="/assets/video/video-optimized-further.mp4"
				type="video/mp4">
				<!-- TODO: a still image here as a fallback -->
				Sorry, your browser doesn't support embedded videos.
			</video>
		</div>
		<section class="bv-hero-content">
			<h1>Our Goals</h1>
			<p>Copy for our goals.</p>
			<a href="#" class="bv-button bv-hero-button">Hello!</a>
		</section>
	</section>
</section>
@endsection
