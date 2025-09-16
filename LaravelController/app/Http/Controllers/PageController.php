<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(){
        // return "<h1>Welcome to Controller</h1>";
        return view('welcome');
    }
    // public function showUser(){
    //     // return "<h1>Welcome to Controller</h1>";
    //     return view('user');
    // }

    //pass value in Route
    public function showUser(string $id){
        // return "<h1>Welcome to Controller</h1>";
        // return view('user',['id'=>$id]);
        return view('user',compact('id'));// for save key and varable name
    }

  public function showBlog(){
        return view('blog');
    }
}
