<?php

namespace App\Http\Controllers;

use App\Models\artist;
use App\Models\comments;
use App\Models\Like;
use Illuminate\Http\Request;
use App\Models\MusicalPiece;
use App\Models\playlistSongs;
use App\Models\User;
use Illuminate\Validation\Rule;

class MusicalPieceController extends Controller
{        // show all listing
        public function index()
        {
            return view('index');
            // return view('listings',[
            //     'listings'=>MusicalPieceModel::all()
            // ]);
        }
        public function admin(){
            return view('Dashboard.music',['musics' => MusicalPiece::all()]);
        }
        public function adminArtists(){
            
            return view('Dashboard.artists',['artists' => artist::all()]);
        }
        public function adminComments(){
            return view('Dashboard.comments',['comments'=>comments::all()]);
        }
        public function Artists(){
            return view('pages.Artists',['artists'=>artist::all()]);
        }
        public function addArtist(){
            return view('Forms.addArtist');
        }
        public function Albums(){
            return view('pages.Albums');
        }
        public function Music(MusicalPiece $musicalPiece){
            return view('pages.Music',['music'=>$musicalPiece,]);
        }
        public function add(){
            return view('Forms.AddMusic',['artists'=>artist::all()]);
        }
        public function Musics(){
            return view('pages.Musics',['musics'=>MusicalPiece::all(),'playlists'=>playlistSongs::all()]);
        }
        public function Artist(artist $artist)
        {
            return view('pages.Artist',['artist'=>$artist]);
            // return view('listings',[
            //     'listings'=>MusicalPieceModel::all()
            // ]);
        }
        public function Home(){
            return view('pages.home',['artists'=>artist::inRandomOrder()->limit(5)->get(),'musics'=>MusicalPiece::inRandomOrder()->limit(10)->get()->where('archive',0),'playlists'=>playlistSongs::all()->where('clientId',auth()->id()),'user'=>User::all()->where('id',auth()->id())]);
        }
        public function updateMusic(MusicalPiece $musicalPiece){
            return view('Forms.updateMusic',['music'=>$musicalPiece,'artists'=>artist::all(),'artist'=>artist::where('id',$musicalPiece->artiste)->get()]);
        }
        public function ModifyMusic(MusicalPiece $musicalPiece,Request $request)
        {
            $formFields = $request->validate([
                'title' => 'required',
                'writer' => 'required',
                'langue' => 'required',
                'lyrics' => 'required',
                'artiste' => 'required',
                'duration'=> 'required'
            ]);
            if($request->hasFile('music')) {
                $formFields['music'] = $request->file('music')->store('music','public');
            }
            if($request->hasFile('coverImage')) {
                $formFields['coverImage'] = $request->file('coverImage')->store('musicCover','public');
            }
            $musicalPiece->update($formFields);
            return redirect('/admin')->with('message','Artist Updated');
        }
        // single listing
        public function show(MusicalPiece $listing)
        {
            ddd('index');
            // return view('listing',['listing' => $listing]);
        }
        public function ArchiveMusic(MusicalPiece $musicalPiece)
        {
            MusicalPiece::where('id', $musicalPiece->id)->update(['archive' => 1]);
        return back();
        }
        public function showMusic(MusicalPiece $musicalPiece){
            MusicalPiece::where('id',$musicalPiece->id)->update(['archive'=>0]);
            return back();
        }
        public function store(Request $request){
                $formFields = $request->validate([
                    'title' => 'required',
                    'writer' => 'required',
                    'langue' => 'required',
                    'lyrics' => 'required',
                    'artiste' => 'required',
                    'duration'=> 'required'
                ]);
                if($request->hasFile('music')) {
                    $formFields['music'] = $request->file('music')->store('music','public');
                }
                if($request->hasFile('coverImage')) {
                    $formFields['coverImage'] = $request->file('coverImage')->store('musicCover','public');
                }
                // $formFields['user_id'] = auth()->id();
                MusicalPiece::create($formFields);
                return redirect('/admin');
        }
        public function deleteMusic(MusicalPiece $musicalPiece){
            $musicalPiece->delete();
            return back()->with('message','Music Was deleted');
        } 
        public function AddMusicToPlaylist()
        { 
            ddd('addMusic To playlis');
        }
        public function create()
        {
            ddd('create Music');
        //    return view('create');
        }
}
