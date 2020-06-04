<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;

use App\Repositories\BooksRepository;

class BooksController extends Controller
{
    public function index(BooksRepository $bookRepository){

        $users= User::select('id','name')->get();

        $books = $bookRepository->all();

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

    public function show(Book $book){
        return $book;
    }
}
