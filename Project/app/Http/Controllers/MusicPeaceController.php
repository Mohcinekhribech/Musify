<?php

namespace App\Http\Controllers;

use App\Models\MusicPeaceModel;
use Illuminate\Http\Request;

class MusicPeaceController extends Controller
{
        // show all listing
        public function index()
        {
            ddd('index');
            // return view('listings',[
            //     'listings'=>MusicPeaceModel::all()
            // ]);
        }
        // single listing
        public function show(MusicPeaceModel $listing)
        {
            ddd('index');
            // return view('listing',['listing' => $listing]);
        }
        public function AddMusic()
        {
            ddd('Add Music');
        }
    
        public function ArchiveMusic()
        {
            ddd('archive Music');
        }
    
        public function ModifyMusic()
        {
            ddd('mosify Music');
        }
    
        public function ManageComments()
        {
            ddd('manage Comments');
        }
        public function AddComments()
        {
            ddd('add Comments');
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
    
        public function store(){
            ddd('store Music');
            // dd($request->all());
        }
}
