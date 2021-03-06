@extends('admin.layout.admin')

@section('title', $recipe->name)

@section('content')
<div class="container">
    <div>
        <div>
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Recipe') }} {{ $recipe->name }}</h3>
                </div>

                <div class="card-body">
                    <x-alert />
                    <form method="POST" action="{{ route('admin.recipe.update',$recipe->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="image-container">
                            <div class="recipe-image">
                                <img src="{{ asset('storage/images/recipes/'.$recipe->type.'/'.$recipe->image) }}" alt="Image Preview" class="imageRecipe-preview edit-image">
                            </div>
                        </div>
                        <div class="input">
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>

                                <div class="col">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $recipe->name }}" readonly>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="type">{{ __('Type') }}</label>

                                <div class="col">
                                    <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $recipe->type }}" readonly>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ingredients" class="col-md-4 col-form-label text-md-right">{{ __('List of ingredients') }}</label>

                                <div class="col">
                                    <textarea id="ingredients" type="text" class="form-control @error('ingredients') is-invalid @enderror" name="ingredients" readonly>{{ $recipe->ingredients }}</textarea>

                                    @error('ingredients')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="preparation_time" class="col-md-4 col-form-label text-md-right">{{ __('Preparation time in minutes') }}</label>

                                <div class="col">
                                    <input id="preparation_time" type="number" class="form-control @error('preparation_time') is-invalid @enderror" name="preparation_time" value="{{ $recipe->preparation_time }}" readonly>

                                    @error('preparation_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="preparation" class="col-md-4 col-form-label text-md-right">{{ __('Preparation') }}</label>

                                <div class="col">
                                    <textarea name="preparation" id="preparation" class="form-control @error('preparation') is-invalid @enderror" cols="30" rows="10" readonly>{{ $recipe->preparation }}</textarea>

                                    @error('preparation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col">
                                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10" readonly>{{ $recipe->description }}</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group checkbox">
                                <label for="status" class="label-checkbox">{{ __('Approve Recipe') }}</label>                                                              
                                <input id="status" type="checkbox" class="form-control @error('status') is-invalid @enderror checkbox-input" name="status" value="1">
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group buttons">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Confirm') }}
                                    </button>
                                    <a href="{{ route('admin.recipe.destroy',$recipe->id) }}" class="btn btn-danger" onclick="event.preventDefault();
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
                <form action="{{ route('admin.recipe.destroy',$recipe->id) }}" id="{{ 'form-destroy-'.$recipe->id }}" method="post" style="display:none">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection