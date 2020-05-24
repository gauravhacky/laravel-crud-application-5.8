<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddBookValRequest;
use Session;
use App\Book;

class BooksController extends Controller
{
    public function index()
    {
    	$booksData=Book::orderBy('id','desc')->get();
    	return view('books.list',compact('booksData'));
    }

    public function createBooks()
    {
    	return view('books.create');
    }

    public function storeBooks(AddBookValRequest $request)
    {
    	$books = new Book();
    	$books->book_name = $request->book_name;
    	$books->book_author = $request->book_author;
    	$books->book_description = $request->book_description;
    	$books->save();
    	return redirect()->route('book.list')->with('flash_message_success','Book added Successfully');
    }

    public function showBooks($id)
    {
    	$id = base64_decode($id);
    	$bookShow = Book::find($id);
    	return view('books.show',compact('bookShow'));
    }

    public function editBooks($id)
    {
    	$id = base64_decode($id);
    	$booksData = Book::find($id);
        return view('books.edit',compact('booksData'));
    }

    public function updateBooks(AddBookValRequest $request,$id)
    {
    	$books = Book::find($id);
    	$books->book_name = $request->book_name;
    	$books->book_author = $request->book_author;
    	$books->book_description = $request->book_description;
    	$books->save();
    	return redirect()->route('book.list')->with('flash_message_success','Book updated Successfully');
    }

    public function deleteBooks($id)
    {
    	$id = base64_decode($id);
    	Book::find($id)->delete();
    	return redirect()->route('book.list')->with('flash_message_success','Book deleted Successfully');
	}
}
