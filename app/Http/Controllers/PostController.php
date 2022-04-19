<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function return_posts(){
        return  $posts = [
            ['id' => 1, 'title' => 'Laravel', 'post_creator' => 'Ahmed', 'created_at' => '2022-04-16 10:37:00'],
            ['id' => 2, 'title' => 'PHP', 'post_creator' => 'Mohamed', 'created_at' => '2022-04-16 10:37:00'],
            ['id' => 3, 'title' => 'Javascript', 'post_creator' => 'Ali', 'created_at' => '2022-04-16 10:37:00'],
        ];
    }
    public function index()
    {

        $posts= $this->return_posts();
       //  dd($posts); //for debugging
        return view('posts.index',[
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        return 'we are in store';
    }

    public function show($postId)
    {
       $posts= $this->return_posts();
      // dd($posts);
        return view('posts.show',['post'=>$posts[$postId-1]]);
    }

    public function edit($postId){
        $posts= $this->return_posts();
        return view('posts.edit',['post'=>$posts[$postId-1],'posts'=>$posts]);
    }

    public function update($postId,Request $req){
          $newData=$req->all();
          $posts= $this->return_posts();
          $posts[$postId-1]['title']=$newData['Post_title'];
          $posts[$postId-1]['post_creator']=$newData['Post_auther'];

        return view('posts.index',['posts'=>$posts]);
    }







}
