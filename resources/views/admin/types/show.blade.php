@extends('layouts.admin')

@section('content')
    <h1 class="text-uppercase">Type: {{ $type->name }}</h1>
    <br>
    <h5>All projects under this type:</h5>
    @foreach ($type->projects as $project)
        <p>{{ $project->title }}</p>
    @endforeach
@endsection
