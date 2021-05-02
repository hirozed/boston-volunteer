<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href="{{ $page->getUrl() }}">
		<meta name="description" content="{{ $page->description }}">
		<title>{{ $page->title }}</title>
		<link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Domine&family=Fraunces&family=Newsreader&family=Petrona&display=swap" rel="stylesheet">
		<script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
	</head>
	<body>
		<header>
			<nav class="bv-nav" role="navigation">
				<a href="/" id="bv-logo">
					<img src="/assets/images/BV-new-01.svg" alt="Boston Volunteers">
				</a>
				<ul id="js-bv-nav" class="bv-nav-list">
					<li class="bv-nav-item"><a class="bv-nav-link" href="/our-story">Our Story</a></li>
					<li class="bv-nav-item"><a class="bv-nav-link" href="/our-goals">Our Goals</a></li>
					<li class="bv-nav-item"><a class="bv-nav-link" href="/find-events">Find an Event</a></li>
					<li class="bv-nav-item"><a class="bv-nav-link" href="/organize-events">Organize an Event</a></li>
					<li class="bv-nav-item"><a class="bv-nav-link bv-button bv-nav-button" href="/get-involved">Get Involved</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<section class="bv-hero">
				<div class="bv-hero-video">
					@yield('hero-media')
				</div>
				<section class="bv-hero-content">
					@yield('hero-content')
				</section>
			</section>
			<!--section class="bv-content"-->
				@yield('content')
			<!--/section-->
		</main>
	</body>
</html>
