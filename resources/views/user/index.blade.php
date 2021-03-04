@extends('user.layout.user')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header">
                    <h3>{{ auth()->user()->name }}</h3>                                   
                </div>
                <div class="card-body">
                    @if(auth()->user()->avatar)
                        <div class="avatar-container">
                            <img src="{{ asset('storage/images/user/'.auth()->id().'/'.auth()->user()->avatar) }}" alt="{{ auth()->user()->avatar }}">
                        </div>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('Recipe Status') }}</h3>
                </div>
                <div class="card-body"> 
                    @if(auth()->user()->recipes->count())
                    <table>
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th> 
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach(auth()->user()->recipes as $recipe)
                            <tr>                            
                                <td>{{ $recipe->name }}</td>
                                <td>{{ ucfirst($recipe->type) }}</td>
                                <td>
                                    @if($recipe->status)
                                    {{ __('Approved') }}
                                    @else
                                    {{ __('Pending') }}
                                    @endif
                                </td> 
                                <td>
                                    @if($recipe->status)
                                    <a href="{{ route('recipe.show',$recipe->id) }}" class="btn btn-info">{{ __('Show') }}</a>   
                                    <a href="{{ route('recipe.edit',$recipe->id) }}" class="btn btn-primary">{{ __('Update') }}</a>                                
                                    <a href="{{ route('recipe.destroy',$recipe->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                                        if(confirm('Are you sure?')){
                                            document.getElementById('form-delete-{{$recipe->id}}')
                                            .submit()
                                        }">{{ __('Delete') }}                        
                                    </a>
                
                                    <form action="{{ route('recipe.destroy',$recipe->id) }}" id="{{ 'form-delete-'.$recipe->id }}" method="post" style="display:none">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    @else
                                    {{ __('Please wait for approval') }}
                                    @endif
                                </td>                                                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <h3>{{ __('No recipes') }}</h3> 
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
