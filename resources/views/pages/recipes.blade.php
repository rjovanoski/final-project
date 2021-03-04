@extends('pages.layout.master')

@section('content')

<div class="recipes-hero">
    <img src="{{ asset('img/cook-366875_1920.jpg') }}" alt="" srcset="">
        <div class="recipes-hero-text">{{ __('You create,') }}<br>{{ __('we post,') }}<br>{{ __('people make') }}</div>
</div>

<div class="container">
        @if($breakfasts->count())
        <section class="breakfast">
            <h2>{{ __('Breakfast Recipes') }}</h2>
                <div class="recipe-container">
                    @foreach($breakfasts as $breakfast)
                    <div class="card">
                        <div class="image">
                            <img src="{{ asset('storage/images/breakfast/'.$breakfast->image) }}" alt="{{ $breakfast->image }}">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">{{ $breakfast->name }}</h5>
                          <p class="card-text">{{ $breakfast->description }}</p>
                          <a href="{{ route('recipes.view',$breakfast->id) }}" class="link">{{ __('See recipe') }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
        </section>
        @endif
        @if($breads->count())
        <section class="bread">
            <h2>{{ __('Bread Recipes') }}</h2>
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
        </section>
        @endif
        @if($burgers->count())
        <section class="burger">
            <h2>{{ __('Burger Recipes') }}</h2>
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
        </section>
        @endif
        @if($meats->count())
        <section class="meat">
            <h2>{{ __('Meat Recipes') }}</h2>
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
        </section>
        @endif
        @if($pastas->count())
        <section class="pasta">
            <h2>{{ __('Pasta Recipes') }}</h2>
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
        </section>
        @endif
        @if($pizzas->count())
        <section class="pizza">
            <h2>{{ ('Pizza Recipes') }}</h2>
                <div class="recipe-container">
                    @foreach($pizzas as $pizza)
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('storage/images/pizza/'.$pizza->image) }}" alt="{{ $pizza->image }}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $pizza->name }}</h5>
                                <p class="card-text">{{ $pizza->description }}</p>
                                <a href="{{ route('recipes.view',$pizza->id) }}" class="link">{{ __('See recipe') }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
        </section>
        @endif
        @if($soups->count())
        <section class="soup">
            <h2>{{ __('Soup Recipes') }}</h2>
                <div class="recipe-container">
                    @foreach($soups as $soup)
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('storage/images/soup/'.$soup->image) }}" alt="{{ $soup->image }}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $soup->name }}</h5>
                                <p class="card-text">{{ $soup->description }}</p>
                                <a href="{{ route('recipes.view',$soup->id) }}" class="link">{{ __('See recipe') }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
        </section>
        @endif
        @if($cakes->count())
        <section class="cake">
            <h2>{{ __('Cake Recipes') }}</h2>
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
        </section>
        @endif
        @if($vegans->count())
        <section class="vegan">
            <h2>{{ __('Vegan Recipes') }}</h2>
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
        </section>
        @endif
    </div>

@include('pages.includes.footer')

@endsection