@extends('user.layout.user')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ auth()->user()->name }}</h3>
                </div>
                @if(auth()->user()->avatar)
                    <div class="avatar-container">
                        <img src="{{ asset('storage/images/user/'.auth()->id().'/'.auth()->user()->avatar) }}" alt="{{ auth()->user()->avatar }}">
                    </div>
                @endif
                <div class="card-body"> 
                    <x-alert />
                    @if($recipes->count())                  
                        <div class="recipes">
                                @foreach($recipes as $recipe)
                                    <a href="{{ route('recipe.show',$recipe) }}">{{ $recipe->name }}</a>
                                @endforeach
                        </div>
                    @else
                        <h3>{{ __('No Recipes') }}</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
