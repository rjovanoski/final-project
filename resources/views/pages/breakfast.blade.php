@extends('pages.layout.master')

@section('title', 'Breakfast Recipes')

@section('content')

<div class="breakfast-hero">
    <img src="{{ asset('img/ben-kolde-rQsYZnCRU00-unsplash.jpg') }}" alt="" srcset="">
        <div class="breakfast-hero-text">Breakfast<br>The most important <br>meal of the day</div>
</div>

<div class="container">
    <div class="recipe-container">
        @foreach($breakfasts as $breakfast)
            <div class="card">
                <div class="image">
                    <img src="{{ asset('storage/images/recipes/breakfast/'.$breakfast->image) }}" alt="{{ $breakfast->image }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $breakfast->name }}</h5>
                    <p class="card-text">{{ $breakfast->description }}</p>
                    <a href="{{ route('recipes.view',$breakfast->id) }}" class="link">{{ __('See recipe') }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('pages.includes.footer')

@endsection