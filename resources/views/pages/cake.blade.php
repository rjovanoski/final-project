@extends('pages.layout.master')

@section('title', 'Cake Recipes')

@section('content')

<div class="cake-hero">
    <img src="{{ asset('img/michaela-baum-VnM6_liIRJ0-unsplash.jpg') }}" alt="" srcset="">
        <div class="cake-hero-text">{{ __('CAKE') }}<br>{{ __('Spoonful of fluffy cream') }}</div>
</div>

<div class="container">
    <div class="recipe-container">
        @foreach($cakes as $cake)
            <div class="card">
                <div class="image">
                    <img src="{{ asset('storage/images/cake/'.$cake->image) }}" alt="{{ $cake->image }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $cake->name }}</h5>
                    <p class="card-text">{{ $cake->description }}</p>
                    <a href="{{ route('recipes.view',$cake->id) }}" class="link">{{ __('See recipe') }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('pages.includes.footer')

@endsection