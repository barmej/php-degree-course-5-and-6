<?php

namespace App\Repositories;

use App\Book;

class BooksRepository{
    public function all(){
        return Book::all();
    }
}

?>