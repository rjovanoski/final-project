@extends('pages.layout.master')

@section('title', 'About Us')

@section('content')

<div class="container">
    <div class="about">
        <div class="about-left-side">
            <img class="about-image" src="{{ asset('img/dessy-dimcheva-GRl0w5-OepM-unsplash.jpg') }}" alt="" srcset="">
        </div>
        <div class="about-right-side">
            <h3>{{ __('About Us') }}</h3>
            <p>{{ __('This is a site for people who like to get their hands dirty while they cook.') }}</p>
            <p>{{ __('It is for those who care about the quality of their food, and how it affects the health of themselves and the planet.') }}</p>
            <p>{{ __('It is for cooks who care about design and want to create a beautiful kitchen.') }}</p>
            <p>{{ __('It’s a place to dive in deep, and embrace the joy of one of our basic needs: Food, cooked at home, nourishing ourselves and our households.') }}</p>
            <p>{{ __('You can find thousands of recipes submitted by our community and cooked by our visitors.') }}</p>
            <p>{{ __('We depend on and we look forward to your ideas, feedback, and support. So get ready for some inspiration and come hang out!') }}</p>
            <p>{{ __('We look forward cooking with you!') }}</p>
        </div>
    </div>
</div>

@endsection