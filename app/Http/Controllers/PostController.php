<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post=post::latest()->get();
        return view('welcome',['post'=>$post]);
    }
}
