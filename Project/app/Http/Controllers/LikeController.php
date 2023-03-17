<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\MusicalPiece;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function Addlikes($id)
    {
        $like['musicId'] = $id;
        $like['clientId'] = auth()->id();
        Like::create($like);
        return back();
    }
    static public function check($id)
    {
        if (Like::where('musicId', $id)->where('clientId', auth()->id())->exists()) {
            return 1;
        } else {
            return 0;
        }
    }
    public function removelikes(Like $like)
    {
        $like->delete();
    }
}
