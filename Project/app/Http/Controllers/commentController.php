<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\MusicalPiece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentController extends Controller
{
    //
    public function addComment(Request $request,MusicalPiece $musicalPiece){
        $formFields = $request->validate([
            'comment' => 'required',
        ]);
        $formFields['musicId']=$musicalPiece->id;
        $formFields['clientId']=Auth::user()->id;
            // $formFields['user_id'] = auth()->id();
            comments::create($formFields);
            return back();
    }
    public function deleteComment(comments $comments){
        $comments->delete();
        return back();
    }
}
