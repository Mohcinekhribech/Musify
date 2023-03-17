<?php

use App\Http\Controllers\artistController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\LikeController;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MusicalPieceController;
use App\Http\Controllers\playlistController;
use App\Models\artist;
use App\Models\MusicalPiece;
use App\Models\playlist;

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
//admin route
Route::prefix('admin')->middleware('isadmin')->group(function(){
    Route::get('/',[MusicalPieceController::class,'admin']);
    Route::get('/comments',[MusicalPieceController::class,'adminComments']);
    Route::get('/updateArtist/{artist}', [artistController::class,'updateArtist'])->middleware('auth');
    Route::post('/ModifyArtist/{artist}', [artistController::class,'ModifyArtist'])->middleware('auth');
    Route::get('/artists',[MusicalPieceController::class,'adminArtists']);
    Route::post('/Artist/store',[artistController::class,'storeArtist']);
    Route::get('/Artist/add', [MusicalPieceController::class,'addArtist']);
    Route::get('/music/add', [MusicalPieceController::class,'add']);
    Route::get('/music/update/{musicalPiece}', [MusicalPieceController::class,'updateMusic']);
    Route::post('/ModifyMusic/{musicalPiece}', [MusicalPieceController::class,'ModifyMusic']);
    Route::post('/music/store',[MusicalPieceController::class,'store']);
    Route::get('/music/delete/{musicalPiece}',[MusicalPieceController::class,'deleteMusic']);
    Route::get('/artist/delete/{artist}',[artistController::class,'deleteArtist']);
    Route::get('/artist/archive/{artist}',[artistController::class,'ArchiveArtist']);
    Route::get('/artist/show/{artist}',[artistController::class,'showArtist']);
    Route::get('/music/archive/{musicalPiece}',[MusicalPieceController::class,'ArchiveMusic']);
    Route::get('/music/show/{musicalPiece}',[MusicalPieceController::class,'showMusic']);
    Route::get('/comment/delete/{comments}',[commentController::class,'deleteComment']);
});
//user route
Route::get('/register', [UserController::class,'create']);
Route::get('/login', [UserController::class,'log'])->name('login');
Route::post('/authentification', [UserController::class,'authentification']);
Route::post('/user/store', [UserController::class,'store']);
Route::post('/user/logout', [UserController::class,'logout']);

//playlist Route
Route::get('/playlists', [playlistController::class,'playlists'])->middleware('auth');
Route::get('/playlists/{playlist}', [playlistController::class,'Single_playlist'])->middleware('auth');
Route::get('/AddToPlaylist/{playlist}/{musicalPiece}', [playlistController::class,'storeMusic'])->middleware('auth');
Route::get('/playlist/add', [playlistController::class,'addPlaylist'])->middleware('auth');
Route::post('/playlists/store', [playlistController::class,'store'])->middleware('auth');

//Music Route
Route::get('/', [MusicalPieceController::class,'index']);
Route::get('/home', [MusicalPieceController::class,'home'])->middleware('auth');
Route::get('/addLike/{musicalPiece}',[LikeController::class,'Addlikes'])->middleware('auth');
Route::get('/removelikes/{like}',[LikeController::class,'removelikes'])->middleware('auth');
Route::post('/store', [MusicalPieceController::class,'store']);
Route::get('/music/{musicalPiece}', [MusicalPieceController::class,'Music'])->middleware('auth');
Route::get('/musics', [MusicalPieceController::class,'Musics'])->middleware('auth');

Route::get('/list/{listing}',[MusicalPieceController::class,'show']);

//Artists Route
Route::get('/Artist/{artist}', [MusicalPieceController::class,'Artist'])->middleware('auth');
Route::get('/Artists',[MusicalPieceController::class,'Artists'])->middleware('auth');
Route::post('/comment/store/{musicalPiece}',[commentController::class,'addComment']);

// Route::get('/hello', function(){
//     return response('<h1> hello </h1>');
// });
// Route::get('/posts/{id}',function($id){
//     return response('Post'.$id);
// })->where('id','[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name .' '. $request->city;
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
