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
        $post=$user->post;
        return view('profile',['count'=>$count,'user'=>$user,'post'=>$post]);
    }

    public function edit($id){
        $user=User::find($id);
        return view('profile.edit',['user'=>$user]);
       
    }

    public function update(Request $request,$id){

     $attributes=request()->validate([
        'mobileno'=>'',
        'firmname'=>'',
        'gstno'=>'',
        'address'=>'',
        'location'=>'',
        'sites'=>'',
        'wiringcharge'=>'',
        'structurecharge'=>'',
        'totalcharge'=>'',

     ]);

     User::where('id',$id)->update($attributes);

     return redirect("/profile/$id");
       
    }
}
