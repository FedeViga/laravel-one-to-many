@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{$user->name}}'s {{ __(' Dashboard') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    
    <h2 class="text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>

    <h3 class="text-secondary my-4 px-3">
        {{ __('Projects') }}
    </h3>
    <div class="list-group px-3">
        <a href="{{route('projects.index')}}" class="list-group-item list-group-item-action">Projects List</a>
        <a href="{{route('projects.create')}}" class="list-group-item list-group-item-action">Add Project</a>
        <a href="#" class="list-group-item list-group-item-action">Future Features</a>
    </div>

    <h3 class="text-secondary my-4 px-3">
        {{ __('Types') }}
    </h3>
    <div class="list-group px-3">
        <a href="{{route('types.index')}}" class="list-group-item list-group-item-action">Types List</a>
        <a href="{{route('types.create')}}" class="list-group-item list-group-item-action">Add Type</a>
        <a href="#" class="list-group-item list-group-item-action">Future Features</a>
    </div>
</div>
@endsection