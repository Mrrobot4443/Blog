<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Poste;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function Accueil(Request $request){
        // dd($request -> ip());
        return view('Accueil');
    }
    public function validation(Request $request){
        $request->validate([
            'name'=>'required|min:4',

          ]);
          $category =new Category ();
          $category ->name=$request->name;
          $category ->save();
    }
    public function post(Request $request){
        $categories=Category::all();
        return view ('post',compact('categories'));}

        public function traitement (Request $request){
            $request->validate ([
                'name'=>'required',
                'category_id'=>'required',
                'image'=>'required',
                'content'=>'required',

            ]);
            $post=new Poste();
            $post->title=$request->name;
            $post->image=$request->file('image')->store('images/posts');
            $post->category_id=$request->category_id;
            $post->content=$request->content;
            $post->save();
            flashy()->success('welcome to our blog');
          return back();

    }
}
