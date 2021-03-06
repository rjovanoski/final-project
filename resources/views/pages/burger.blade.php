@extends('pages.layout.master')

@section('title', 'Burger Recipes')

@section('content')

<div class="burger-hero">
    <img src="{{ asset('img/ilya-mashkov-_qxbJUr9RqI-unsplash.jpg') }}" alt="" srcset="">
        <div class="burger-hero-text">{{ __('Burger') }}<br>{{ __('hot, juicy and a great') }}<br>{{ __('choice for your next meal') }}</div>
</div>

<div class="container">
    <div class="recipe-container">
        @foreach($burgers as $burger)
            <div class="card">
                <div class="image">
                    <img src="{{ asset('storage/images/burger/'.$burger->image) }}" alt="{{ $burger->image }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $burger->name }}</h5>
                    <p class="card-text">{{ $burger->description }}</p>
                    <a href="{{ route('recipes.view',$burger->id) }}" class="link">{{ __('See recipe') }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('pages.includes.footer')

@endsection