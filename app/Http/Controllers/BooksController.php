<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('home',compact('books'));
    }

    public function store(){
        return request();
    }
}
