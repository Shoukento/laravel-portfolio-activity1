<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    $name = 'Khent O. Manangkila';
    $course = 'Bachelor of Science in Information Technology';
    $university = 'Central Mindanao University';

    return view('about', [
        'name' => $name,
        'course' => $course,
        'university' => $university
    ]);
})->name('about');

Route::get('/projects', function () {
    $projects = [
        ['title' => 'Project 1', 'description' => 'Manhwa Website'],
        ['title' => 'Project 2', 'description' => 'Mobile app design'],
    ];

    return view('projects', ['projects' => $projects]);
})->name('projects');

Route::get('/contact', function () {
    $email = 'khentmanangkila23@gmail.com';
    $phone = '+63 935 212 1525';

    return view('contact', [
        'email' => $email,
        'phone' => $phone
    ]);
})->name('contact');