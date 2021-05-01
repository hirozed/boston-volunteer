@extends('_layouts.main')

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
			<h1>Hello world!</h1>
			<p>We're New England GiveCamp and we're here to give!</p>
			<a href="#" class="bv-button bv-hero-button">Hello!</a>
		</section>
	</section>
</section>
<!-- 
	TODO: Include a credits page. 
	Video by Pressmaster from Pexels
-->
@endsection
