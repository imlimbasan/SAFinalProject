<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        //get all products
        $posts=Posts::all();
        return view('index',['posts'=>$posts]);

    }
}
