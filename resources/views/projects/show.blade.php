@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h2 class="mb-3 text-center">
            {{$project->title}}
        </h2>

        <div class="text-center">

          <img class="img-fluid py-3" src="{{asset('storage/' . $project->thumb)}}" alt="Project Thumbnail">
  
          <div class="px-sm-3">
            <table class="table w-auto mx-auto text-start">
                <tbody>
                  <tr>
                    <th scope="row" class="d-none d-md-table-cell">
                        Description:
                    </th>
                    <td>
                        <h5 class="d-block d-md-none">
                            Description:
                        </h5>
                        <div class="ps-2 ps-md-0">{{$project->description}}</div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" class="d-none d-md-table-cell">
                        Technologies:
                    </th>
                    <td>
                        <h5 class="d-block d-md-none">
                            Technologies:
                        </h5>
                        <div class="ps-2 ps-md-0">{{$project->technologies}}</div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" class="d-none d-md-table-cell">
                        Github Link:
                    </th>
                    <td>
                        <h5 class="d-block d-md-none">
                            GitHub Links:
                        </h5>
                        <a class="text-white text-break" href="#">
                          <div class="ps-2 ps-md-0">{{$project->link}}</div>
                        </a>
                    </td>
                  </tr>
                </tbody>
            </table>
        </div>

            <a href="{{route('projects.edit', $project->id)}}" class="btn btn-outline-warning">Edit</a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                Delete
            </button>

            <!-- Modal -->
            <div class="modal" tabindex="-1" id="deleteModal">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Delete Project</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure you want to delete {{$project->title}}?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <form action="{{route('projects.destroy', $project->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            
        </div>

    </div>

@endsection