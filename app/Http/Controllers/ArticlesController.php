<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\articles;

use App\Http\Requests\CheckArticlesRequest;

use Gate;

class ArticlesController extends Controller
{

    public function index(){
        $articles = articles::all();

            return view("articles")->with("articles",$articles);
    }
    public function create(){
        return view("articles.create");
    }
    public function store(CheckArticlesRequest $request){
    //  if(Gate::denies('create-article')){return redirect('http://google.com');} //via ServiceProvider
  //  if($request->user()->cannot('create-article')){return redirect('http://youtube.com');} //via ServiceProvider
    //  if(Gate::denies('store1',$request->user())){return redirect('http://youtube.com');} //via policies
    $this->authorize('store1',$request->user()); //via controllers authorize
    	$dulieu_tu_input = $request->all();
      articles::create($dulieu_tu_input);
    	return redirect('/articles');
    }

    public function edit($id)
    {
        $article = articles::findOrFail($id);
        return view('articles.edit',array('articles'=>$article));
    }
    public function update(Request $request,$id)
    {
        $article = articles::findOrFail($id);
        $article->update($request->all());
        return redirect('/articles');
    }
}
