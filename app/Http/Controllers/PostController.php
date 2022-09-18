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

    public function create(){
     return view('posts.create');
    }

    public function store(Request $request){

      $attributes= request()->validate([
        'user_id'=>'',
        'sitename'=>'required',
        'sitedetail'=>'required',
        'address'=>'required',
        'location'=>'required',

       ]);

       post::create($attributes);
       return redirect('/post');

       }


       public function edit($id){
        $data=post::find($id);
        return view('posts.edit',['id'=>$id,'data'=>$data]);
       }

       public function update($id){
      
        $attributes= request()->validate([
            'user_id'=>'',
            'sitename'=>'required',
            'sitedetail'=>'required',
            'address'=>'required',
            'location'=>'required',
    
           ]);
    
           post::where('id',request('id'))->update($attributes);
           return redirect("/profile/{$attributes['user_id']}");
     
       }

       public function destroy($id){
        
      
    
           post::where('id',$id)->delete();
           return back();
     
       }
   
   
}
