@extends('admin.layout.admin')

@section('title', 'User Recipes')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('User Recipes') }}</h3>
                </div>
                <div class="card-body"> 
                    <x-alert />
                    @if($recipes->count())
                    <table>
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Created by</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($recipes as $recipe)
                            <tr>                            
                                <td>{{ $recipe->id }}</td>
                                <td>{{ $recipe->name }}</td>
                                <td>{{ $recipe->user->name }}</td>
                                <td>
                                    @if($recipe->status)
                                    {{ __('Approved') }}
                                    @else
                                    {{ __('Pending') }}
                                    @endif
                                </td>                                
                                <td>
                                    @if($recipe->status == 0)
                                    <a href="{{ route('admin.recipe.edit',$recipe->id) }}" class="btn btn-primary">{{ __('View') }}</a>
                                    <a href="{{ route('admin.recipe.destroy',$recipe->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                                        if(confirm('Are you sure?')){
                                            document.getElementById('form-destroy-{{$recipe->id}}')
                                            .submit()
                                        }">{{ __('Delete') }}</a>

                                    <form action="{{ route('admin.recipe.destroy',$recipe->id) }}" id="{{ 'form-destroy-'.$recipe->id }}" method="post" style="display:none">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    @else
                                    {{ __('Not Allowed') }}
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <h3>{{ __('No recipes to approve') }}</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection