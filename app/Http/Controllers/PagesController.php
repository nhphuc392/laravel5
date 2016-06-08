<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function aboutme()
    {
        $name = "My name is Phuc";
        $age = 18;
        $data['name']=$name;
        $data['age']=$age;
        return view('pages.aboutme')->with('data',$data);
     //   return view('pages.aboutme');
    }
    public function contact()
    {
        $name = "My name is Phuc";
        $age = 18;
       // $data['name']=$name;
        $data['age']=$age;
        return view('pages.contact')->with('data',$data);
    }
}
