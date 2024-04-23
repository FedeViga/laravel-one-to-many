@extends('layouts.app')

@section('content')

  <div class="container py-5">

    <h2 class="mb-3">
    Types List:
    </h2>

    <div class="list-group px-3">

      @foreach($types as $type)
      <li class="d-flex justify-content-between align-items-center list-group-item list-group-item" aria-current="true">
      <span>{{$type->title}}</span>
      <div>
        <a href="{{route('types.edit', $type->id)}}" type="button" class="btn btn-sm btn-outline-warning">Edit</a>
        <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
      </div>
      </li>
      @endforeach

    </div>
  </div>

@endsection