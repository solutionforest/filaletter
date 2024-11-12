<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/documentation/{path}/{title}', function (string $path, string  $title) {
    $file = public_path('docs/' . $path . '/' . $title . '.md');
    $content = file_get_contents($file);
    $title = ucfirst(trim(substr($title, 2)));


    return view('docs', [
        'content' => $content,
        'title' => $title
    ]);
})->name('docs');