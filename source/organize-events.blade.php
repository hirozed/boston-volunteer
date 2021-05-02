@extends('_layouts.main')

@section('title', 'Organize Events')

@section('hero-media')
	<video autoplay loop muted playsinline>
		<source src="/assets/video/pexels-julia-m-cameron-6894045.mp4"
		type="video/mp4">
		<!-- TODO: a still image here as a fallback -->
		Sorry, your browser doesn't support embedded videos.
	</video>
@endsection

@section('hero-content')
	<h1>Organize Events</h1>
	<p>Passionate about a cause, but need help? We can connect you with a workforce.</p>
@endsection
	
@section('body')
<div class="bv-content-container">
	<p>Josh: please provide copy here.</p>
	<a href="mailto:josh@bostonvolunteer.org" class="bv-button">Email Josh for more information</a>
</div>
@endsection
