@extends('pages.layout.master')

@section('title', 'Vegan Recipes')

@section('content')

<div class="vegan-hero">
    <img src="{{ asset('img/jess-torre-6-6sVwz1N2U-unsplash.jpg') }}" alt="" srcset="">
        <div class="vegan-hero-text">{{ __('VEGAN') }}<br>{{ __('Variety of nutritional') }}<br>{{ __('and healthy recipes') }}</div>
</div>

<div class="container">
    <div class="recipe-container">
        @foreach($vegans as $vegan)
            <div class="card">
                <div class="image">
                    <img src="{{ asset('storage/images/vegan/'.$vegan->image) }}" alt="{{ $vegan->image }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $vegan->name }}</h5>
                    <p class="card-text">{{ $vegan->description }}</p>
                    <a href="{{ route('recipes.view',$vegan->id) }}" class="link">{{ __('See recipe') }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('pages.includes.footer')

@endsection