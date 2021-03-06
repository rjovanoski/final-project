@extends('user.layout.user')

@section('title', 'New Recipe')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('New Recipe') }}</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('recipe.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="image-container">
                            <div class="image-preview" id="previewContainer">
                                <img src="" alt="Image Preview" class="imageRecipe-preview">
                                <span class="default-text">{{ __('Image Preview') }}</span>
                            </div>
                            <div class="row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}<small>*</small></label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror image-upload" name="image" value="{{ old('image') }}">

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="input">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}<small>*</small></label>

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
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}<small>*</small></label>

                            <div class="col-md-6">
                                <select name="type" value="">
                                    <option value="">...</option>
                                    <option value="breakfast" name="breakfast">{{ __('Breakfast') }}</option>
                                    <option value="bread" name="bread" >{{ __('Bread') }}</option>
                                    <option value="meat" name="meat">{{ __('Meat') }}</option>
                                    <option value="soup" name="soup">{{ __('Soup') }}</option>
                                    <option value="burger" name="burger">{{ __('Burger') }}</option>
                                    <option value="pasta" name="pasta">{{ __('Pasta') }}</option>
                                    <option value="pizza" name="pizza">{{ __('Pizza') }}</option>
                                    <option value="cake" name="cake">{{ __('Cake') }}</option>
                                    <option value="vegan" name="vegan">{{ __('Vegan') }}</option>
                                </select>

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
                                <textarea id="ingredients" type="text" class="form-control @error('ingredients') is-invalid @enderror" name="ingredients">{{ old('ingredients') }}</textarea>

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
                                <input id="preparation_time" type="number" min="1" class="form-control @error('preparation_time') is-invalid @enderror" name="preparation_time" value="{{ old('preparation_time') }}">

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
                                <textarea name="preparation" id="preparation" class="form-control @error('preparation') is-invalid @enderror" cols="30" rows="10">{{ old('preparation') }}</textarea>

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
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10">{{ old('description') }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                                <a href="{{ route('user.index') }}" class="btn btn-danger">{{ __('Cancel') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script src="{{ asset('js/file_preview.js') }}" defer></script>

@endsection
