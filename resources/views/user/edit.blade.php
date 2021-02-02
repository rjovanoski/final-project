@extends('user.layout.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Edit information') }}</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.update',auth()->id()) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="image-container">
                            <div class="image-preview" id="previewContainer">
                                <img src="" alt="Image Preview" class="imageRecipe-preview">
                                <span class="default-text">{{ __('Image Preview') }}</span>
                            </div>
                            <div class="row">
                                <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('avatar') is-invalid @enderror image-upload" name="avatar" value={{ auth()->user()->avatar }}">

                                    @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="input">
                            <x-alert />
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}<small>*</small></label>

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
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}<small>*</small></label>

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
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}<small>*</small></label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="facebook" class="col-md-4 col-form-label text-md-right">{{ __('Facebook Link') }}</label>

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
                                <label for="twitter" class="col-md-4 col-form-label text-md-right">{{ __('Twitter Link') }}</label>

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
                                            document.getElementById('form-delete-{{ auth()->id() }}')
                                            .submit()
                                        }">{{ __('Delete') }}
                                        </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <form action="{{ route('user.destroy',auth()->id()) }}" id="{{ 'form-delete-'.auth()->id() }}" method="post" style="display:none">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script src="{{ asset('js/file_preview.js') }}" defer></script>

@endsection