@extends('pages.layout.master')

@section('title', 'Pasta Recipes')

@section('content')

<div class="pasta-hero">
    <img src="{{ asset('img/alex-motoc-QEbIgaxP7N8-unsplash.jpg') }}" alt="" srcset="">
        <div class="pasta-hero-text">{{ __('PASTA') }}<br>{{ __('Creamy dish that even') }}<br>{{ __('the pickiest eaters will love') }}</div>
</div>

<div class="container">
    <div class="recipe-container">
        @foreach($pastas as $pasta)
            <div class="card">
                <div class="image">
                    <img src="{{ asset('storage/images/pasta/'.$pasta->image) }}" alt="{{ $pasta->image }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $pasta->name }}</h5>
                    <p class="card-text">{{ $pasta->description }}</p>
                    <a href="{{ route('recipes.view',$pasta->id) }}" class="link">{{ __('See recipe') }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('pages.includes.footer')

@endsection