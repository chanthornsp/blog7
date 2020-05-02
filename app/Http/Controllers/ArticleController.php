<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::where('active',1)
                    ->orderBy('article_id','desc')
                    ->paginate(5);
//        dd($articles);
        return view('articles.index',['articles'=>$articles]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $article = Article::where('active',1)->findOrFail($id);
      return view('articles.show')->with(compact('article'));
    }

    // show create form
    public function create(){
      return view('articles.create');
    }
    // store data from form submit
    public function store(Request $request){


       $validData =  $request->validate([
            'title'=>'required|unique:articles,title',
            'detail'=>'required|min:10',
            'active'=>'integer'
            ]);

            // $data = $request->all();


    //    dd($data);
       Article::create($validData);
       request()->session()->flash('message', 'Created successful!');
      // $article = new Article;
      // $article->title = $request->title;
      // $article->detail = $request->detail;
      // $article->active = $request->active;
      //     $article->save();

       return redirect()->route('article.index');
    }
// method show edit article
    public function edit(Article $article){
        // $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    // store edited article
    public function update($article){
        $article = Article::findOrFail($article);
        $validData =  request()->validate([
            'title'=>'required|unique:articles,title,'.$article->article_id.',article_id',
            'detail'=>'required|min:10',
            'active'=>'integer'
            ]);
        $article->update($validData);
        request()->session()->flash('message', 'Updated successful!');
        return redirect()->route('article.index');
    }

    public function destroy(Article $article){
      $article->delete();
      request()->session()->flash('message', 'Deleted successful!');
      return redirect()->route('article.index');
    }

}
