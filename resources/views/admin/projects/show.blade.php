@extends('layouts.admin')

@section('content')
    {{-- <h1>{{ $project->title }}</h1>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <img src="{{ $project->image }}" alt="{{ $project->title }}">
    <p>{{ $project->description }}</p> --}}
    <div class="container">
        <div class="card bg-secondary text-white my-5">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $project->image }}" class="img-fluid rounded-start" alt="{{ $project->title }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title text-uppercase">{{ $project->title }}</h3>
                        <hr>
                        <p class="card-text fst-italic">{{ $project->description }}</p>

                        <div class="text-end">
                            <small class="text-body-secondary">
                                <p class="fw-lighter fst-italic text-black">
                                    Type: {{ $project->type ? $project->type->name : 'No Type' }}</p>
                                <span class="fw-lighter fst-italic text-black">Techs: </span>
                                @foreach ($project->technologies as $technology)
                                    <a href="{{ route('admin.technologies.show', $technology->slug) }}"
                                        class="badge rounded-pill text-bg-info">{{ $technology->name }}</a>
                                @endforeach
                                {{-- Techs: @forelse ($project->technologies as $technology)
                                    <a href="{{ route('admin.technologies.show', $technology->slug) }}"
                                        class="badge rounded-pill text-bg-info">{{ $technology->name }}</a>
                                        @empty
                                        No tech!
                                @endforelse --}}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
