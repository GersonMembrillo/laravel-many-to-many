@extends('layouts.admin')

@section('content')
    <h1>Add Project</h1>

    {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)s
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                required maxlength="150" minlength="3">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex">
            <div class="media me-4">
                <img id="uploadPreview" width="100" src="https://via.placeholder.com/300x200">
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                    id="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="type_id">Type</label>
            <select name="type_id" id="type_id" class="form-control @error('type_id') is-invalid @enderror">
                <option value="">Select type</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
            @error('type_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="10"
                class="form-control @error('description') is-invalid @enderror"></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <p>Select Techs: </p>
            @foreach ($technologies as $technology)
                <div>
                    <input type="checkbox" name="technologies[]" value="{{ $technology->id }}" class="form-check-input"
                        {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                    <label for="" class="form-check-label">{{ $technology->name }}</label>
                </div>
            @endforeach
            @error('technologies')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection

{{-- post
category --}}
