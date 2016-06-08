<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\articles;

class ArticlesController extends Controller
{
    
    public function index(){
        $articles = articles::all();
        
            return view("articles")->with("articles",$articles);
    }
    public function create(){
        return view("articles.create");
    }
    public function store(Request $request){
	$dulieu_tu_input = $request->all();
    
    $articles = new articles;
    
    $articles->hihi = $dulieu_tu_input['hihi'];
    
    $articles->save();
    
 
	return redirect('/articles');
}
    
}
