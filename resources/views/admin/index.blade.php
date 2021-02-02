@extends('admin.layout.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ Auth::user()->name }}</h3>
                </div>
                <div class="card-body"> 
                    <x-alert />
                </div>
            </div>
        </div>
    </div>
</div>

@endsection