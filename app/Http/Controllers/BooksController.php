<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function index(){
        $book = Book::first();
        return view('home',compact('book'));
    }
}
