@extends('user.layout.user')

@section('title', $recipe->name)

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $recipe->name }}</h3>
                </div>
                <div class="card-image">
                    <img src="{{ asset('storage/images/'.$recipe->type.'/'.$recipe->image) }}" alt="">
                </div>
                <div class="card-body"> 
                    <div class="card-text">
                        <p>{{ __('Preparation time: ') }}<span>{{ $recipe->preparation_time }} {{ __('minutes') }}</span></p>                                
                    </div>
                    <div class="card-text">
                        <p>{{ __('Ingredients: ') }}</p>
                        <span>{{ $recipe->ingredients }}</span>
                    </div>
                    <div class="card-text">
                        <p>{{ __('Preparation: ') }}</p>
                        <span>{{ $recipe->preparation }}</span>
                    </div>
                    <div class="card-text">
                        <p>{{ __('Description: ') }}</p>
                        <span>{{ $recipe->description }}</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('recipe.edit',$recipe->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                    <a href="{{ route('recipe.destroy',$recipe->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                        if(confirm('Are you sure?')){
                            document.getElementById('form-delete-{{$recipe->id}}')
                            .submit()
                        }">{{ __('Delete') }}                        
                    </a>

                    <form action="{{ route('recipe.destroy',$recipe->id) }}" id="{{ 'form-delete-'.$recipe->id }}" method="post" style="display:none">
                        @csrf
                        @method('delete')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection