<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view("post");
    }

    public function view_all(){
        $posts = Post::all();
        return view("view_all",['posts'=>$posts]);
    }

    public function detailView($id){
        $post = DB::table('posts')->where('id',$id)->first();
        $title = $post -> title;
        $content = $post -> content;
        $id = $post -> id;

        $data = [
            'title'=>$title,
            'content'=>$content,
            'id'=>$id
        ];
        return view('detail',["post"=>$data]);
    }
    public function addPost(Request $request){
        $post = new Post();
        $post->id = $request->id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = Auth::user()->id;
        $post->save();
        return view('view_all',['posts'=>$post]);


    }
//記事削除ボタン用
    public function deleteSelect($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        $posts = Post::all();

        return view("view_all",["posts"=>$posts]);
    }

    public function editPost($request)
    {
        $edit_article = DB::table('posts')->where('id',$request->id);
        $edit_article ->update(['content' => $request->contet]);
        return view("view_all",["posts"=>$edit_article]);
    }


}
