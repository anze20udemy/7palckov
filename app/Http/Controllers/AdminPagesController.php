<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPagesController extends Controller
{
    public function index()
    {


//        $photo_count = Photo::count();
//        $comment_count = Comment::count();

        return view('admin.index', compact('photo_count'));
    }
}
