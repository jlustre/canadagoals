@extends('layouts.main')

@section('main_content')
    @include('components.main_carousel')

    <main id="main">

        @include('components.services')

        @include('components.properties')

        @include('components.agents')

        @include('components.latest_news')

        @include('components.testimonials')

    </main><!-- End #main -->
@endsection

