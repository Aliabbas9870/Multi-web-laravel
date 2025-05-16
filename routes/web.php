<?php

use App\Models\Website;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/{slug}', function ($slug) {
    $website = Website::where('slug', $slug)
        ->with(['services'])
        ->firstOrFail();

    return view('website', compact('website'));
});
