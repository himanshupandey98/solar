<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\category;
use Illuminate\Http\Request;

class membercontroller extends Controller
{
    
    public function index(){
       $member= User::latest()->filter(request(['search','category']))->get();
       $category=category::all();
      
if(request('category')){
   $member= User::Where('category_id',request('category'))->get();
}


       return view('member',['member'=>$member,'category'=>$category]);
    }
}
