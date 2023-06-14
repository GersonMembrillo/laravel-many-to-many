@extends('layouts.admin')

@section('content')
    <h1 class="text-uppercase">Technology: {{ $technology->name }}</h1>
    <br>
    <h5>All projects using this tech:</h5>
    @foreach ($technology->projects as $project)
        <p>{{ $project->title }}</p>
    @endforeach
@endsection
