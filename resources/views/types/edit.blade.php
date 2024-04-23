@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h2 class="mb-3">
            Edit Type:
        </h2>

        <div class="px-3">
            <form action="{{route('types.update', $type->id)}}" method="POST" class="pb-4" enctype="multipart/form-data">

                @csrf
                @method('PUT')
        
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ?? $type->title}}" required>
                    @error('title')
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