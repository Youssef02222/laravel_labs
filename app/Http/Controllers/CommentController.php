<?php

namespace App\Http\Controllers;


use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment($id){
        $comments = Comment::all();
        $user =Auth::user();
        $post_id=$id;

        return view('posts.com',['comments'=> $comments,'user'=> $user , 'post_id'=>$post_id],);
    }

    public function storeComment(){
        $data = request()->all();


        Comment::create([

            'user_id'=>$data['post_creator'],
            'post_id'=>$data['id'],
            'comment' => $data['addcomm'],
        ]);

        return redirect()->route('posts.index');
    }


    public function update($comId,Request $req){
        $newData=$req->all();
        // ??
        DB::table('comments')
            ->where('id', $comId)
            ->update([
                'comment'     => $newData['comment']
            ]);
        return to_route('posts.show');
    }

    public function destroy($postId) {
        Comment::where('id', $postId)->delete();
        return redirect()->route('posts.index');
    }


    public function restore($postId) {
        Comment::where('id', $postId)->restore();
        return redirect()->route('posts.show');
    }

    public function force_destroy($postId) {
        Comment::where('id', $postId)->forceDelete();
        return redirect()->route('posts.show');
    }
}
