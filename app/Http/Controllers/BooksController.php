<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;

class BooksController extends Controller
{
    public function index(){

        return response('delete cookie')->cookie('barmej','learn programming',0);

        $users= User::select('id','name')->get();
        $books = Book::all();
        return view('home',compact('books','users'));
    }

    public function store(){
        $validatedData = request()->validate([
            'title' => 'required',
            'pages' => 'required|numeric|min:1'
        ]);

        $user=User::find(request()->user);

        $book=new Book();
        $book->title=request()->title;
        $book->pages=request()->pages;

        $user->books()->save($book);

        return back();
    }
}
