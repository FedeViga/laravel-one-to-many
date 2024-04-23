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
        <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
        <button type="button" class="btn btn-sm btn-outline-warning">Edit</button>
      </div>
      </li>
      @endforeach

    </div>
  </div>

@endsection