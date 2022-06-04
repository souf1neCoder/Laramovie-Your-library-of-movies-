<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies = User::find(auth()->id())->movies;
        return view('movies.index',compact('movies'));
    }
    // 
    public function edit(Movie $movie){
        return view('movies.edit',compact('movie'));
    }
    // 
    public function destroy(Movie $movie){
        $movie->delete();
        return redirect('/')->with('message','Movie deleted Successfullly!');
    }
    // 
    public function update(Request $request,Movie $movie){
        $formFields = $request->validate([
            'title'=>['required','max:255'],
            'year'=>['required','digits:4','integer','min:1900'],
            'rating'=>['required','numeric','gte:0','lte:10']
        ]);
        $formFields['watchit'] = $request->boolean('watchit');
        $movie->update($formFields);
        return  redirect('/')->with('message','Movie Updated Successfullly!');
    }
    // 
    public function create(){
        return view('movies.create');
    }
    // 
    public function store(Request $request){
        $formFields = $request->validate([
            'title'=>['required','max:255'],
            'year'=>['required','digits:4','integer','min:1900'],
            'rating'=>['nullable','numeric','gte:0','lte:10']
        ]);
        $formFields['watchit'] = $request->boolean('watchit');
        $formFields['user_id'] = auth()->id();
        Movie::create($formFields);
        return  redirect('/')->with('message','Movie Added Successfullly!');
    }
    public function search(){
        $movies= Movie::select("*")
        ->where('title', 'LIKE', '%'. request('search'). '%')->where('user_id','=',auth()->id())
        ->get();
       
        return view('movies.index',compact('movies'));
    }
}
