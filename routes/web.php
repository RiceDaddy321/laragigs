<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

use App\Models\Listing;
use PhpParser\Node\Expr\List_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//add constraints with where and basics
Route::get("/posts/{id}", function($id) {
    ddd($id);
    return response("<h1>".$id."</h1>");
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
   return "<h1>".$request->name.' '.$request->city."</h1>";     
});
/**
 * Common Resource routes:
 * index - show all  listing
 * show - show single listing
 * create - show form to create new listing
 * store - store new listing
 * edit - show form to edit listing
 * update - update listing
 * destory - delete listing
 */

 //adding new functionality path: route, controller method, view

//important code
//all listings
Route::get('/', [ListingController::class, 'index']);

//show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//store listing data
Route::post('/listings', [ListingController::class, 'store']); 

//Show Edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Submit to Update
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//delete listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

require __DIR__.'/auth.php';
