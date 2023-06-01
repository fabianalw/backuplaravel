<?php


use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController;



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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);







Route::get('/', function () {
    return view('home', [
        "title" => "home",
        "active" => 'home'
    ]);
});

Route::get('about', function (){
    return view('about', [
        "title" => "about",
        "active" => 'about',
        "name" => "Fabian Alwan Zaidan",
        "email" => "fabianalwanzaidan@gmail.com",
        "image" => "gambar1.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

// halaman single post
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function (){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

