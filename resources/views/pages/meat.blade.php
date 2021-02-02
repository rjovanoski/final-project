@extends('pages.layout.master')

@section('content')

<div class="meat-hero">
    <img src="{{ asset('img/markus-spiske-A1Yob9kBmKk-unsplash.jpg') }}" alt="" srcset="">
        <div class="meat-hero-text">MEAT<br>Smoked, dried and griled</div>
</div>

<div class="container">
    <div class="recipe-container">
        @foreach($meats as $meat)
            <div class="card">
                <div class="image">
                    <img src="{{ asset('storage/images/meat/'.$meat->image) }}" alt="{{ $meat->image }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $meat->name }}</h5>
                    <p class="card-text">{{ $meat->description }}</p>
                    <a href="{{ route('recipes.view',$meat->id) }}" class="link">{{ __('See recipe') }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('pages.includes.footer')

@endsection