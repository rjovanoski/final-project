@extends('admin.layout.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Edit Recipe') }} {{ $recipe->name }}</h3>
                </div>

                <div class="card-body">
                    <x-alert />
                    <form method="POST" action="{{ route('admin.update',$recipe->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="image-container">
                            <div class="recipe-image">
                                <img src="{{ asset('storage/images/'.$recipe->type.'/'.$recipe->image) }}" alt="Image Preview" class="imageRecipe-preview edit-image">
                            </div>
                        </div>
                        <div class="input">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}<small>*</small></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $recipe->name }}" readonly>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}<small>*</small></label>

                            <div class="col-md-6">
                                <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $recipe->type }}" readonly>
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ingredients" class="col-md-4 col-form-label text-md-right">{{ __('List of ingredients') }}<small>*</small></label>

                            <div class="col-md-6">
                                <textarea id="ingredients" type="text" class="form-control @error('ingredients') is-invalid @enderror" name="ingredients" readonly>{{ $recipe->ingredients }}</textarea>

                                @error('ingredients')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="preparation_time" class="col-md-4 col-form-label text-md-right">{{ __('Preparation time in minutes') }}<small>*</small></label>

                            <div class="col-md-6">
                                <input id="preparation_time" type="number" class="form-control @error('preparation_time') is-invalid @enderror" name="preparation_time" value="{{ $recipe->preparation_time }}" readonly>

                                @error('preparation_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="preparation" class="col-md-4 col-form-label text-md-right">{{ __('Preparation') }}<small>*</small></label>

                            <div class="col-md-6">
                                <textarea name="preparation" id="preparation" class="form-control @error('preparation') is-invalid @enderror" cols="30" rows="10" readonly>{{ $recipe->preparation }}</textarea>

                                @error('preparation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}<small>*</small></label>

                            <div class="col-md-6">
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10" readonly>{{ $recipe->description }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Approve Recipe') }}<small>*</small></label>

                            <div class="col-md-6">                                
                                <input id="status" type="checkbox" class="form-control @error('status') is-invalid @enderror" name="status" value="1">

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Approve') }}
                                </button>
                                <a href="{{ route('admin.destroy',$recipe->id) }}" onclick="event.preventDefault();
                                    if(confirm('Are you sure?')){
                                        document.getElementById('form-destroy-{{$recipe->id}}')
                                        .submit()
                                    }">{{ __('Delete') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <form action="{{ route('admin.destroy',$recipe->id) }}" id="{{ 'form-destroy-'.$recipe->id }}" method="post" style="display:none">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection