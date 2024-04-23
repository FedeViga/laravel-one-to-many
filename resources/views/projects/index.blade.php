@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h2 class="mb-3">
            Projects List:
        </h2>

        <div class="list-group px-3">

            @foreach($projects as $project)
            <a href="{{route('projects.show', $project->id)}}" class="d-flex justify-content-between list-group-item list-group-item-action" aria-current="true">
              <span>{{$project->title}}</span>
              <span>{{$project->type?->title}}</span>
            </a>
            @endforeach

          </div>
    </div>

@endsection