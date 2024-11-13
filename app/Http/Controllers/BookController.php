<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Bookshelf;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data['books']= Book::with('bookshelf')->get();
        return view('books.index', $data);
    }

    public function create(){
        $data ['bookshelves'] = Bookshelf::get();
        return view('books.create', $data);
    }
}
