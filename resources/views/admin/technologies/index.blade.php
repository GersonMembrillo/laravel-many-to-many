@extends('layouts.admin')

@section('content')
    <h1>Tech list</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Created at</th>
                <th scope="col">Tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
                <tr>
                    <th scope="row">{{ $technology->id }}</th>
                    <td>{{ $technology->name }}</td>
                    <td>{{ $technology->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.technologies.show', $technology->slug) }}">Show</a>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
