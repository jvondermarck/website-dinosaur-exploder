<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserEloquent;
use App\Models\Article;
use App\Models\Comment;

class CommentController extends Controller
{
    // return the view
    public function addComment( Request $request, $id )
    {
        $article = Article::findOrFail($id);
        return view('addComment')->with('article', $article)->with('message',$request->session()->get('message'));;
    }

    public function getArticleInfoForum(Request $request, $id) // get the id of which article we want to modify
    {
        $article = Article::findOrFail($id);
        $comment = Comment::where('article_id', $id)->get();
        return view('articleForum')->with('article', $article)->with('comment', $comment);
    }

    public function addOneComment( Request $request, $idArticle)
    {
        if (!$request->filled(['comment']) )
			return redirect()->route('addarticle')->with('message','Some POST data are missing.');

        $comment = new Comment;
        $comment->user_id = $request->session()->get('user')->login;
        $comment->article_id =  $idArticle;
        $comment->comment = $request->comment;
        $comment->last_publi = date('Y-m-d H:i:s');
        $comment->last_modif = date('Y-m-d H:i:s');

        try
        {
            $comment->save();
        }
        catch (\Illuminate\Database\QueryException $e)
        {
            return redirect()->route('seeArticle')->with('message', $e->getMessage());
        }

        return redirect()->route('getArticleInfoForum', [$idArticle])->with('message','Comment added !.');
    }
}