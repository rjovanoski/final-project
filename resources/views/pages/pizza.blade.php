@extends('pages.layout.master')

@section('title', 'Pizza Recipes')

@section('content')

<div class="pizza-hero">
    <img src="{{ asset('img/ivan-torres-MQUqbmszGGM-unsplash.jpg') }}" alt="" srcset="">
        <div class="pizza-hero-text">{{ __('Everyone likes a good') }}<br>{{ __('slice of pizza') }}</div>
</div>

<div class="container">
    <div class="recipe-container">
        @foreach($pizzas as $pizza)
            <div class="card">
                <div class="image">
                    <img src="{{ asset('storage/images/recipes/pizza/'.$pizza->image) }}" alt="{{ $pizza->image }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $pizza->name }}</h5>
                    <p class="card-text">{{ $pizza->description }}</p>
                    <a href="{{ route('recipes.view',$pizza->id) }}" class="link">{{ __('See recipe') }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('pages.includes.footer')

@endsection