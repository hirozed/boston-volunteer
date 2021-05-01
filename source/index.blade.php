@extends('_layouts.main')

@section('body')
<header>
    <nav class="bv-nav">
        <a href="/" id="bv-logo">
            <img src="/assets/images/BV-new-01.svg" alt="Boston Volunteers">
        </a>
        <ul class="bv-nav-list">
            <li class="bv-nav-item"><a class="bv-nav-link" href="/our-story">Our Story</a></li>
            <li class="bv-nav-item"><a class="bv-nav-link" href="/our-goals">Our Goals</a></li>
            <li class="bv-nav-item"><a class="bv-nav-link" href="/find-events">Find an Event</a></li>
            <li class="bv-nav-item"><a class="bv-nav-link" href="/organize-events">Organize an Event</a></li>
            <li class="bv-nav-item"><a class="bv-nav-link bv-nav-button" href="/get-involved">Get Involved</a></li>
        </ul>
    </nav>
</header>
<div class="bv-content">
    <h1 class="text-3xl font-bold">Hello world!</h1>
</div>
@endsection
