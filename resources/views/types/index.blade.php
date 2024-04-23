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

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteTypeModal">
            Delete
          </button>

          <!-- Modal -->
          <div class="modal" tabindex="-1" id="deleteTypeModal">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Delete Project</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete {{$type->title}}?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <form action="{{route('types.destroy', $type->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      @endforeach


      <div class="pt-3">
        <a href="{{route('types.create')}}" class="btn btn-outline-light" href="">Add Type</a>
      </div>
    </div>

  </div>

@endsection