@extends('layout')

@section('title', 'My Projects')

@section('content')
    <h1>My Projects</h1>
    <div style="margin-top: 2rem; 
                display: grid; 
                grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); 
                gap: 1.5rem;">
        
        @foreach($projects as $project)
            <div style="background: #ecf0f1; 
                        padding: 1.5rem; 
                        border-radius: 8px; 
                        box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <h3 style="color: #2c3e50;">{{ $project['title'] }}</h3>
                <p style="margin-top: 0.5rem; color: #555;">{{ $project['description'] }}</p>
            </div>
        @endforeach
    </div>
@endsection