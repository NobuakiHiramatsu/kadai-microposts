<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //投稿をお気に入りにしるアクション
    public function store($id)
    {
        \Auth::user()->favorite($id);
        
        return back();
    }
    
    
    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        
        return back();
    }
}
