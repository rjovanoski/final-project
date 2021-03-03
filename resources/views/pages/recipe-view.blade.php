@extends('pages.layout.master')

@section('content')

<div id="fb-root"></div>

<div class="container">
    <div class="container-show">
        <div class="container-recipe">
            <div class="recipe">
                <div class="recipe-image">
                    <img src="{{ asset('storage/images/'.$recipe->type.'/'.$recipe->image) }}" alt="">
                </div>
                <div class="recipe-user">
                    <div class="user-name">
                        <p>Created by: <small>{{ $recipe->user->name }}</small></p>
                        <p>Created: <small>{{ $recipe->created_at->diffForHumans() }}</small></p>
                        @isset($recipe->user->facebook)
                            <a href="{{ $recipe->user->facebook }}"><i class="fab fa-facebook"></i></a>
                        @endisset
                        @isset($recipe->user->twitter)
                            <a href="{{ $recipe->user->twitter }}"><i class="fab fa-twitter"></i></a>
                        @endisset
                    </div>
                    @isset($recipe->user->avatar)
                    <div class="user-image">
                        <img src="{{ asset('storage/images/user/'.$recipe->user->id.'/'.$recipe->user->avatar) }}" alt="">
                    </div>
                    @endisset
                </div>
            </div>
            <div class="recipe-information">
                <h5>{{ $recipe->name }}</h5>
                <p>Preparation time: <small>{{ $recipe->preparation_time }} minutes</small></p>
                <div class="ingredients">
                    <p>Ingredients:</p>
                    <small>{{ $recipe->ingredients }}</small>
                </div>
                <div class="preparation">
                    <p>Preparation:</p>
                    <small>{{ $recipe->preparation }}</small>
                </div>
                <div class="description">
                    <p>Description:</p>
                    <small>{{ $recipe->description }}</small> 
                </div>         
            </div>
        </div>
        <div class="container-fb">
            <div class="fb-comments" data-href="{{ Request::url() }}" data-width="450" data-numposts="5"></div>    
        </div>
    </div>
</div>

@include('pages.includes.footer')

@endsection

@section('fb-script')

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=423256175595079&autoLogAppEvents=1" nonce="KC3p2iKr"></script>

@endsection