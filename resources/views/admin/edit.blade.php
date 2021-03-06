@extends('admin.layout.admin')

@section('title', 'Admin Information')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Admin Information') }}</h3>
                </div>

                <div class="card-body">
                    <x-alert />
                    <form method="POST" action="{{ route('admin.update',auth()->id()) }}" class="admin-form">
                        @csrf
                        @method('PATCH')
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
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}">
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
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ auth()->user()->username }}">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                    <a href="{{ route('admin.destroy',auth()->id()) }}" class="btn btn-danger" onclick="event.preventDefault();
                                        if(confirm('Are you sure?')){
                                            document.getElementById('form-destroy-{{auth()->id()}}')
                                            .submit()
                                        }">{{ __('Delete Account') }}
                                    </a>
                                </div>
                            </div>
                    </form>
                </div>
                <form action="{{ route('admin.destroy',auth()->id()) }}" id="{{ 'form-destroy-'.auth()->id() }}" method="post" style="display:none">
                    @csrf
                    @method('delete')
                </form>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Change Password') }}</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.passwordUpdate',auth()->id()) }}" class="admin-form">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="old_password" class="col">{{ __('Old password') }}</label>

                            <div class="col-md-6">
                                <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password">

                                @error('old_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="new_password" class="col">{{ __('New password') }}</label>

                            <div class="col">
                                <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password">

                                @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirm_new_password" class="col">{{ __('Confirm password') }}</label>

                            <div class="col">
                                <input id="confirm_new_password" type="password" class="form-control @error('confirm_new_password') is-invalid @enderror" name="confirm_new_password">

                                @error('confirm_new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection