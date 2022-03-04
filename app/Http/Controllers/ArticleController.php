<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    // return the view
    public function addarticle( Request $request )
    {
        return view('addarticle')->with('message',$request->session()->get('message'));;
    }

    public function addOneArticle( Request $request )
    {
        if (!$request->filled(['title','catchy','context', 'publish']) )
			return redirect()->route('addarticle')->with('message','Some POST data are missing.');

        $article = new Article;
        $article->auteur = $request->session()->get('user')->login;
        $article->titre = $request->title;
        $article->phrase = $request->catchy;
        $article->contenu = $request->context;

        if($request->input('publish') == "true"){
            $publicated = true;
          }
          else{
            $publicated = false;
          }
    
        $article->statut = $publicated;
        $article->last_publi = date('Y-m-d H:i:s');
        $article->last_modif = date('Y-m-d H:i:s');

        try
        {
            $article->save();
        }
        catch (\Illuminate\Database\QueryException $e)
        {
            return redirect()->route('addarticle')->with('message', $e->getMessage());
        }

        return redirect()->route('seeArticle')->with('message','Article created !.');
    }

    public function giveLastestArticle( Request $request )
    {
        $article = Article::orderBy('last_publi','desc')->where('statut', '1')->get();
        //session()->put('article', $article);
        return view('public')->with('article', $article);
    }

    public function seeArticle(Request $request)
    {
        $article = Article::where('auteur', session()->get('user')->login)->get();
        return view('seeArticle')->with('article', $article)->with('message', $request->session()->get('message'));
    }

    public function getArticleInfo(Request $request, $id) // get the id of which article we want to modify
    {
        $article = Article::findOrFail($id);
        return view('modifyArticle')->with('article', $article);
    }

    public function updateArticle(Request $request) // get the id of which article we want to modify
    {
        $id = $request->input("Send");
        $article = Article::find($id);
        $article->titre = $request->title;
        $article->phrase = $request->catchy;
        $article->contenu = $request->context;

        if($request->input('publish') == "true"){
            $publicated = true;
          }
          else{
            $publicated = false;
          }
    
        $article->statut = $publicated;
        $article->last_modif = date('Y-m-d H:i:s');

        try
        {
            $article->save();
        }
        catch (\Illuminate\Database\QueryException $e)
        {
            return redirect()->route('seeArticle')->with('message', $e->getMessage());
        }

        return redirect()->route('seeArticle');
    }

    public function deleteArticle(Request $request, $id)
    {
        $article = Article::find($id);
        
        try
        {
            $article->delete();
        }
        catch (\Illuminate\Database\QueryException $e)
        {
            return redirect()->route('account')->with('message', $e->getMessage());
        }

        return redirect()->route('seeArticle')->with('message','Article succesfully deleted.');
    }

    public function onOffPublishing(Request $request, $id)
    {
        $article = Article::find($id);
        if($article->statut == true){
            $publicated = false;
        }
        else{
            $publicated = true;
        }
        $article->statut = $publicated;

        try
        {
            $article->save();
        }
        catch (\Illuminate\Database\QueryException $e)
        {
            return redirect()->route('account')->with('message', $e->getMessage());
        }
        return redirect()->route('seeArticle');
    }
}
 