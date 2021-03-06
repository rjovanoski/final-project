@extends('pages.layout.master')

@section('title', 'Bread Recipes')

@section('content')

<div class="bread-hero">
    <img src="{{ asset('img/wesual-click-rsWZ-P9FbQ4-unsplash.jpg') }}" alt="" srcset="">
        <div class="bread-hero-text">Bread<br>Crunchy crust<br>Delicious softness inside</div>
</div>

<div class="container">
    <div class="recipe-container">
        @foreach($breads as $bread)
            <div class="card">
                <div class="image">
                    <img src="{{ asset('storage/images/bread/'.$bread->image) }}" alt="{{ $bread->image }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $bread->name }}</h5>
                    <p class="card-text">{{ $bread->description }}</p>
                    <a href="{{ route('recipes.view',$bread->id) }}" class="link">{{ __('See recipe') }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('pages.includes.footer')

@endsection