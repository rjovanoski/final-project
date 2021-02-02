@extends('admin.layout.admin')

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
                    <table class="table table-bordered">
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
                                <th scope="row">{{ $recipe->id }}</th>
                                <td>{{ $recipe->name }}</td>
                                <td>{{ $recipe->user->name }}</td>
                                <td>
                                    @if($recipe->status == 1)
                                    {{ __('Approved') }}
                                    @else
                                    {{ __('Pending') }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.edit',$recipe->id) }}" class="btn btn-primary">{{ __('Edit') }}</a>
                                    <a href="{{ route('admin.destroy',$recipe->id) }}" onclick="event.preventDefault();
                                        if(confirm('Are you sure?')){
                                            document.getElementById('form-destroy-{{$recipe->id}}')
                                            .submit()
                                        }">{{ __('Delete') }}</a>

                                    <form action="{{ route('admin.destroy',$recipe->id) }}" id="{{ 'form-destroy-'.$recipe->id }}" method="post" style="display:none">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection