@extends('user.layout.user')

@section('content')

<div class="container">    
    @if($breakfasts->count()) 
    <section class="breakfast"> 
        <h2>{{ __('Breakfast Recipes') }}</h2>          
            <div class="recipe-container">                
                @foreach($breakfasts as $breakfast)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/breakfast/'.$breakfast->image) }}" alt="{{ $breakfast->image }}">
                        </div>
                        <div class="box-title">
                            <h5>{{ $breakfast->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $breakfast->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $breakfast->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $breakfast->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $breakfast->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ route('recipe.edit',$breakfast->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('recipe.destroy',$breakfast->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                                if(confirm('Are you sure?')){
                                    document.getElementById('form-destroy-{{$breakfast->id}}')
                                    .submit()
                                }">{{ __('Delete') }}</a>

                            <form action="{{ route('recipe.destroy',$breakfast->id) }}" id="{{ 'form-destroy-'.$breakfast->id }}" method="post" style="display:none">
                                @csrf
                                @method('delete')
                            </form>
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
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/bread/'.$bread->image) }}" alt="{{ $bread->image }}">
                        </div>
                        <div class="box-title">
                            <h5>{{ $bread->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $bread->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $bread->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $bread->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $bread->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ route('recipe.edit',$bread->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('recipe.destroy',$bread->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                                if(confirm('Are you sure?')){
                                    document.getElementById('form-destroy-{{$bread->id}}')
                                    .submit()
                                }">{{ __('Delete') }}</a>

                            <form action="{{ route('recipe.destroy',$bread->id) }}" id="{{ 'form-destroy-'.$bread->id }}" method="post" style="display:none">
                                @csrf
                                @method('delete')
                            </form>
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
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/burger/'.$burger->image) }}" alt="{{ $burger->image }}">
                        </div>
                        <div class="box-title">
                            <h5>{{ $burger->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $burger->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $burger->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $burger->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $burger->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ route('recipe.edit',$burger->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('recipe.destroy',$burger->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                                if(confirm('Are you sure?')){
                                    document.getElementById('form-destroy-{{$burger->id}}')
                                    .submit()
                                }">{{ __('Delete') }}</a>

                            <form action="{{ route('recipe.destroy',$burger->id) }}" id="{{ 'form-destroy-'.$burger->id }}" method="post" style="display:none">
                                @csrf
                                @method('delete')
                            </form>
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
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/meat/'.$meat->image) }}" alt="{{ $meat->image }}">
                        </div>
                        <div class="box-title">
                            <h5>{{ $meat->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $meat->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $meat->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $meat->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $meat->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ route('recipe.edit',$meat->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('recipe.destroy',$meat->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                                if(confirm('Are you sure?')){
                                    document.getElementById('form-destroy-{{$meat->id}}')
                                    .submit()
                                }">{{ __('Delete') }}</a>

                            <form action="{{ route('recipe.destroy',$meat->id) }}" id="{{ 'form-destroy-'.$meat->id }}" method="post" style="display:none">
                                @csrf
                                @method('delete')
                            </form>
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
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/pasta/'.$pasta->image) }}" alt="{{ $pasta->image }}">
                        </div>
                        <div class="box-title">
                            <h5>{{ $pasta->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $pasta->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $pasta->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $pasta->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $pasta->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ route('recipe.edit',$pasta->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('recipe.destroy',$pasta->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                                if(confirm('Are you sure?')){
                                    document.getElementById('form-destroy-{{$pasta->id}}')
                                    .submit()
                                }">{{ __('Delete') }}</a>

                            <form action="{{ route('recipe.destroy',$pasta->id) }}" id="{{ 'form-destroy-'.$pasta->id }}" method="post" style="display:none">
                                @csrf
                                @method('delete')
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    @endif
    @if($pizzas->count())
    <section class="pizza">         
        <h2>{{ __('Pizza Recipes') }}</h2>
            <div class="recipe-container">
                @foreach($pizzas as $pizza)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/pizza/'.$pizza->image) }}" alt="{{ $pizza->image }}">
                        </div>
                        <div class="box-title">
                            <h5>{{ $pizza->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $pizza->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $pizza->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $pizza->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $pizza->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ route('recipe.edit',$pizza->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('recipe.destroy',$pizza->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                                if(confirm('Are you sure?')){
                                    document.getElementById('form-destroy-{{$pizza->id}}')
                                    .submit()
                                }">{{ __('Delete') }}</a>

                            <form action="{{ route('recipe.destroy',$pizza->id) }}" id="{{ 'form-destroy-'.$pizza->id }}" method="post" style="display:none">
                                @csrf
                                @method('delete')
                            </form>
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
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/soup/'.$soup->image) }}" alt="{{ $soup->image }}">
                        </div>
                        <div class="box-title">
                            <h5>{{ $soup->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $soup->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $soup->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $soup->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $soup->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ route('recipe.edit',$soup->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('recipe.destroy',$soup->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                                if(confirm('Are you sure?')){
                                    document.getElementById('form-destroy-{{$soup->id}}')
                                    .submit()
                                }">{{ __('Delete') }}</a>

                            <form action="{{ route('recipe.destroy',$soup->id) }}" id="{{ 'form-destroy-'.$soup->id }}" method="post" style="display:none">
                                @csrf
                                @method('delete')
                            </form>
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
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/vegan/'.$vegan->image) }}" alt="{{ $vegan->image }}">
                        </div>
                        <div class="box-title">
                            <h5>{{ $vegan->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $vegan->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $vegan->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $vegan->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $vegan->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ route('recipe.edit',$vegan->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('recipe.destroy',$vegan->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                                if(confirm('Are you sure?')){
                                    document.getElementById('form-destroy-{{$vegan->id}}')
                                    .submit()
                                }">{{ __('Delete') }}</a>

                            <form action="{{ route('recipe.destroy',$vegan->id) }}" id="{{ 'form-destroy-'.$vegan->id }}" method="post" style="display:none">
                                @csrf
                                @method('delete')
                            </form>
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
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/cake/'.$cake->image) }}" alt="{{ $cake->image }}">
                        </div>
                        <div class="box-title">
                            <h5>{{ $cake->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $cake->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $cake->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $cake->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $cake->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ route('recipe.edit',$cake->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('recipe.destroy',$cake->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                                if(confirm('Are you sure?')){
                                    document.getElementById('form-destroy-{{$cake->id}}')
                                    .submit()
                                }">{{ __('Delete') }}</a>

                            <form action="{{ route('recipe.destroy',$cake->id) }}" id="{{ 'form-destroy-'.$cake->id }}" method="post" style="display:none">
                                @csrf
                                @method('delete')
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    @endif
</div>

@endsection