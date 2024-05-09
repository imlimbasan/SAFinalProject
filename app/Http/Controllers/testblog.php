<?php

namespace App\Http\Controllers;
use App\Models\test_blog; 
use App\Models\users;
use App\Models\posts;


class testblog extends Controller
{
    public function index(){
        $all_test_blogs = test_blog::all();
        $first_test_blogs = test_blog::take(1)->get();
        $first_2_test_blogs = test_blog::take(2)->get();
        $total_users = users::count();
        $total_posts = posts::count();


        return view('index', [
            'all_test_blogs' => $all_test_blogs,
            'first_test_blogs' => $first_test_blogs,
            'first_2_test_blogs' => $first_2_test_blogs,
            'total_users' => $total_users,
            'total_posts' => $total_posts,

        ]);
    }





    // public function nume(){

    //     $something = test_blog::orderBy('test_blog_id', 'desc')->take(2)->get();
    //     return view('index', [
    //         'something' => $something
    //     ]);
    // }






}
