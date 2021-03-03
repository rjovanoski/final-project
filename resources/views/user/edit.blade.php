@extends('user.layout.user')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('User Information') }}</h3>
                </div>

                <div class="card-body">
                    <x-alert />
                    <form method="POST" action="{{ route('user.update',auth()->id()) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="image-container">
                            @isset(auth()->user()->avatar)
                                <div class="avatar">
                                    <img src="{{ asset('storage/images/user/'.auth()->id().'/'.auth()->user()->avatar) }}" id="previewAvatar" class="user-avatar" alt="User Avatar">
                                </div>
                                <div class="row">
                                    <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">
    
                                        @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <a href="{{ route('user.avatar.delete',auth()->id()) }}" class="btn btn-danger"onclick="event.preventDefault();
                                        if(confirm('Are you sure?')){
                                            document.getElementById('form-destroy-avatar-{{auth()->id()}}')
                                            .submit()
                                        }">{{ __('Delete Avatar') }}
                                    </a>
                                </div>
                            @else
                                <div class="avatar">
                                    <img src="" id="previewAvatar" alt="Image Preview" srcset="" class="user-avatar">
                                </div>
                                <div class="row">
                                    <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">
    
                                        @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endisset
                        </div>
                        <div class="input">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name }}">

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
                                    <input type="email" name="email" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ auth()->user()->email }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ auth()->user()->username }}">

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="facebook" class="col-md-4 col-form-label text-md-right">{{ __('Facebook Account') }}</label>

                                <div class="col-md-6">                                
                                    <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ auth()->user()->facebook }}">

                                    @error('facebook')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="twitter" class="col-md-4 col-form-label text-md-right">{{ __('Twitter Account') }}</label>

                                <div class="col-md-6">                                
                                    <input id="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ auth()->user()->twitter }}">

                                    @error('twitter')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                    <a href="{{ route('user.destroy',auth()->id()) }}" class="btn btn-danger" onclick="event.preventDefault();
                                        if(confirm('Are you sure?')){
                                            document.getElementById('form-destroy-{{auth()->id()}}')
                                            .submit()
                                        }">{{ __('Delete Account') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <form action="{{ route('user.destroy',auth()->id()) }}" id="{{ 'form-destroy-'.auth()->id() }}" method="post" style="display:none">
                    @csrf
                    @method('delete')
                </form>
                <form action="{{ route('user.avatar.delete',auth()->id()) }}" id="{{ 'form-destroy-avatar-'.auth()->id() }}" method="post" style="display:none">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script src="{{ asset('js/avatar.js') }}" defer></script>

@endsection