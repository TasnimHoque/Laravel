
@extends('layouts.app')

@section('content')
    <h1>Projects</h1>
    @if(isset($projects))
        <ul>
            @foreach($projects as $project)
                <li>{{ $project->name }}</li>
            @endforeach
        </ul>
    @else
        <p>No projects available.</p>
    @endif
@endsection
