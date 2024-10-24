<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [Homecontroller::class, 'home'])->name('home');

Route::get('/about', [Homecontroller::class, 'about'])->name('about');

Route::resource('posts', PostController::class)->except(['index', ]);

//Route::name('posts.')->prefix('posts')->group(function () {

//    Route::get('/create', function () {
//        return view('posts.create');
//    })->name('create');
//
//    Route::post('/', function (Request $request) {
//        // $request->input('title');
//        $request->validate([
//            'title' => 'required',
//            'description' => ['required', 'min:10'],
//            ]);
//
//        return redirect()
//            ->route('posts.create')
//            ->with('success', 'Post is submitted! Title: ' .
//                $request->input('title') . ' Description: ' .
//                $request->input('description'));
//    })->name('store');
//
//});

