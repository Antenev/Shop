<?php

use App\Models\Category;
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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('categories/{category}', function($slug){

    $category = Category::find($slug);
    
    return view('category', [
        'category' => $category
    ]);

   /*  $path = __DIR__ . "/../resources/categories/{$slug}.html";
    if (! file_exists($path)) {
        abort(404);
    }


    $category = cache()->remember("categories.{slug}", 1200, function() use ($path) {
        file_get_contents($path);
    });

    return view('category',[
        'category' => $category
    ]); */
});
