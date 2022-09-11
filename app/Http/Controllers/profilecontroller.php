<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\media;
use Illuminate\Http\Request;

class profilecontroller extends Controller
{
    public function show($id){
       
        
        $count=media::count();
        $user=User::find($id);
        return view('profile',['count'=>$count,'user'=>$user]);
    }
}
