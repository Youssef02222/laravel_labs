<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function return_posts(){
//        return  $posts = [
//            ['id' => 1, 'title' => 'Laravel', 'post_creator' => 'Ahmed','description'=>'the post body' ,'created_at' => '2022-04-16 10:37:00'],
//            ['id' => 2, 'title' => 'PHP', 'post_creator' => 'Mohamed','description'=>'the post body' ,'created_at' => '2022-04-16 10:37:00'],
//            ['id' => 3, 'title' => 'Javascript', 'post_creator' => 'Ali','description'=>'the post body' ,'created_at' => '2022-04-16 10:37:00'],
//        ];
        return $posts=Post::all();
    }
    public function index()
    {
       // $data=Post::all();
      //  dd($data);
        $posts = Post::withTrashed()->get();

       //  dd($posts); //for debugging
        return view('posts.index',[
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        $users=User::all();

        return view('posts.create',['users'=>$users]);
    }

    public function store()
    {
        // get request data
        $data= request()->all();
       // dd($data);

        // store request data in database
        Post::create([
            'title'=>$data['title'],
            'description'=>$data['description'],
            'user_id'=>$data['user'],
        ]);

        // redirect to index
        return to_route('posts.index');
    }

    public function show($postId)
    {
      // $post= Post::where('id',$postId)->first();
      // dd($posts);
        $post=Post::find($postId);
        return view('posts.show',['post'=>$post]);
    }

    public function edit($postId){
        $users = User::all();
        $post = Post::find($postId);
        return view('posts.edit' , ['post'=>$post, 'users'=> $users]);
    }

    public function update($postId,Request $req){
          $newData=$req->all();
//          $posts= Post::all();
//          $posts[$postId-1]['title']=$newData['Post_title'];
//          $posts[$postId-1]['post_creator']=$newData['Post_auther'];
        Post::where('id', $postId)->update([
            'title' => $newData['Post_title'],
            'description' =>$newData['Post_dec'] ,
            'user_id' => $newData['Post_auther'],
        ]);
        return to_route('posts.index');
    }






    public function destroy($postId) {
        Post::where('id', $postId)->delete();
        return redirect()->route('posts.index');
    }


    public function restore($postId) {
        Post::where('id', $postId)->restore();
        return redirect()->route('posts.index');
    }

    public function force_destroy($postId) {
        Post::where('id', $postId)->forceDelete();
        return redirect()->route('posts.index');
    }


//    public function paginate($page) {
//        $per_page = 3;
//    //    $posts = Post::withTrashed()->paginate($per_page, ['*'], 'page', $page);
//        return view("posts.index", [
//            'posts' => $posts
//        ]);
//    }








}
