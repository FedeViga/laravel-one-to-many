@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h2 class="mb-3">
            Edit Project:
        </h2>

        <div class="px-3">
            <form action="{{route('projects.update', $project->id)}}" method="POST" class="pb-4" enctype="multipart/form-data">

                @csrf
                @method('PUT')
        
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ?? $project->title}}" required>
                    @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
        
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{old('description')  ?? $project->description}}</textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
        
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumbnail:</label>
                    <input type="file" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" required>
                    @error('thumb')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <img class="img-fluid py-2" src="{{asset('storage/' . $project->thumb)}}" alt="Project Thumbnail" style="max-height:100px">
                </div>
        
                <div class="mb-3">
                    <label for="technologies" class="form-label">Technologies:</label>
                    <input type="text" class="form-control @error('technologies') is-invalid @enderror" id="technologies" name="technologies" value="{{old('technologies')  ?? $project->technologies}}" required>
                    @error('technologies')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
        
                <div class="mb-3">
                    <label for="link" class="form-label">GitHub Link:</label>
                    <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" value="{{old('link')  ?? $project->link}}" required>
                    @error('link')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
        
                <button type="submit" class="btn btn-outline-success">Save</button>
        
            </form>
        </div>
    </div>

@endsection