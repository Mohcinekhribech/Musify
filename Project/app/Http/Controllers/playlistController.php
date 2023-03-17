<?php

namespace App\Http\Controllers;

use App\Models\MusicalPiece;
use App\Models\playlist;
use App\Models\playlistSongs;
use Illuminate\Http\Request;

class playlistController extends Controller
{
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'playlisName' => 'required'
        ]);
        if ($request->hasFile('playlisPic')) {
            $formFields['playlisPic'] = $request->file('playlisPic')->store('playlisPic', 'public');
        }
        $formFields['clientId'] = auth()->id();
        playlistSongs::create($formFields);
        return redirect('/playlists');
    }
    public function playlists(){
        return view('pages.playlists',['playlists'=>playlistSongs::all()->where('clientId',auth()->id())]);
    } 
    public function Single_playlist(playlistSongs $playlist){
        return view('pages.playlist',['playlists'=>playlist::where('playlistId', '=', $playlist->id)->join('musical_pieces', 'musicId', '=', 'musical_pieces.id')->get()]);
    } 
    public function addPlaylist(){
        return view('Forms.addPlaylist');
    }
    public function storeMusic($playlistId,$musicId){
        if(playlist::where('musicId',$musicId)
                    ->where('playlistId',$playlistId)
                    ->count() == 0){
            $formFields['musicId']= $musicId;
            $formFields['playlistId']= $playlistId;
            playlist::create($formFields);
            return back()->with('message','Music Added To Playlist Successfully');
        }else return back()->with('message','Music alredy exist');
        
    }
}
