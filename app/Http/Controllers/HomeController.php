<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     $books=Book::all();

    //     return view('welcome')->with('books',$books);
    // }
    public function index()
    {
        $b=Book::limit(8)->get();        ;
        if(count($b)>8){
        $books=Book::take(8);
    }else{  $books=$b;}
        return view('welcome')->with('books',$books);
    }

}
