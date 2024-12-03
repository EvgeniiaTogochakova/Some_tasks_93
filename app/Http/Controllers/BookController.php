<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('form');
    }

    public function store(Request $request){
        $validated= $request->validate([
            'title'=>'required|max:255|unique:books',
            'author'=>'required|max:100',
            'year'=>'required|digits:4|integer|min:1457|max:' .(date("Y")),
            'genre'=>'required|in:fantasy,sci-fi,mystery,drama',
        ]);
        $book= new Book($request->all());
        $book->save();
        return response()->json('Book is successfully validated and data has been saved');
        
    }

}
