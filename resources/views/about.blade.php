@extends('layout')

@section('title', 'About Me')

@section('content')
    <h1>About Me</h1>
    <div style="margin-top: 2rem;">
        <h2 style="color: #9c27b0;">{{ $name }}</h2>
        <p style="margin-top: 1rem; font-size: 1.1rem;">
            <strong>Course:</strong> {{ $course }}
        </p>
        <p style="margin-top: 0.5rem; font-size: 1.1rem;">
            <strong>University:</strong> {{ $university }}
        </p>
        <p style="margin-top: 2rem; line-height: 1.8;">
            I am a passionate student learning web development with Laravel.   
            My goal is to become a full-stack developer and create impactful digital solutions.
        </p>
    </div>
@endsection