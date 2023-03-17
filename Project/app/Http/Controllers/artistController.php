<?php

namespace App\Http\Controllers;

use App\Models\artist;
use App\Models\MusicalPiece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class artistController extends Controller
{
    //
    public function storeArtist(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'country' => 'required',
            'date_of_birth' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('artists', 'public');
        }
        // $formFields['user_id'] = auth()->id();
        artist::create($formFields);
        return redirect('/admin/artists');
    }
    public function deleteArtist(artist $artist)
    {
        DB::table('musical_pieces')->where('artiste',$artist->id)->delete();
        $artist->delete();
        return redirect('/admin/artists');
    }
    public function updateArtist(artist $artist){
        return view('Forms.updateArtist',['artist'=>$artist]);
    }
    public function ModifyArtist(Request $request, artist $artist)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'country' => 'required',
            'date_of_birth' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('artists', 'public');
        }
        // $formFields['user_id'] = auth()->id();
        $artist->update($formFields);
        return redirect('/admin/artists')->with('message','Artist Updated');
    }
    public function ArchiveArtist(artist $artist)
    {
        MusicalPiece::where('artiste', $artist->id)->update(['archive' => 1]);
        artist::where('id', $artist->id)->update(['archive' => 1]);
        return back();
    }
    public function showArtist(artist $artist) 
    {
        MusicalPiece::where('artiste', $artist->id)->update(['archive' => 0]);
        artist::where('id', $artist->id)->update(['archive' => 0]);
        return back();
    }
}
