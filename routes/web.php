<?php

Route::view(config('velblog.url_path'), 'vendor.velblog.home');
Route::get(config('velblog.url_path').'/{slug}', function($slug) {
    return view('vendor.velblog.singlePost')->with('post', dcuesta1\Velblog\Post::where('slug', $slug)->first());
});

#TODO:: Route::get(, 'dcuesta1\Velblog\Controllers\SinglePostController@index');
        
Route::group(['prefix' => config('velblog.url_path','blog')], function() {
    Route::view('dashboard', 'velblog::dashboard');
});

