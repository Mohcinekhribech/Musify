<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\MusicPeaceController;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [MusicPeaceController::class,'index']);
Route::get('/create',[MusicPeaceController::class,'create']);
Route::get('/post',[MusicPeaceController::class,'store']);
Route::get('/list/{listing}',[MusicPeaceController::class,'show']);


// Route::get('/hello', function(){
//     return response('<h1> hello </h1>');
// });
// Route::get('/posts/{id}',function($id){
//     return response('Post'.$id);
// })->where('id','[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name .' '. $request->city;
// });