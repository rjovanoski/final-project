@extends('pages.layout.master')

@section('title', 'Contact Us')

@section('content')

<div class="container">
    <div class="contact">
        <div class="left-side">
            <img src="{{ asset('img/casey-lee-awj7sRviVXo-unsplash.jpg') }}" alt="" srcset="">
        </div>
        <div class="right-side">                          
            <h3 class="title">{{ __('Contact Us') }}</h3>
            <x-alert />
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Message') }}</label>

                        <div class="col-md-6">
                            <textarea id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message">{{ old('message') }}</textarea>

                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <button class="btn" type="submit">{{ __('Send Message') }}</button>
                        </div>
                    </div>
                </form>  
        </div>
    </div>
</div>
@endsection