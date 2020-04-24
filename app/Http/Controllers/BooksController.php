<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Books;

class BooksController extends Controller
{
   public function index()
   {
      $books = DB::table('books')->get();
      return view('books.index' , ['books' => $books]);
   }
    // $Books = Book::all()->get();
    //  return view ('Books.index', ['Books' =>$Books]);


public function show(Book $book)
{
    //   $books = books::findOrFail($books);
    // return view('Books.show');
    // $books = DB::table('books')->get();
    return view('books.show', ['book' => $book]);
}


// public function create() 
// {
//     return view('Books.create');
// }

//  public function store()
// {
//     $validatedAttributes = request()->validate([
//         'title' => 'required',
//         'excerpt' => 'required',
//         'body' => 'required'
//     ]);

    //   $Book = new Book();

        //  $Book->title = request('title');
//     // $Book->excerpt = request('excerpt');
//     // $Book->body = request('body');
        //   $Book->save();
//     Book::create($validatedAttributes);

        //  return redirect('/Books');
// }

// public function edit(Book $Book)
// {
//     // compact('Book') = ['Book' => $Book]
//     $Book = Book::find($id);
//     // dd(compact('Book'));
//     return view('Books.edit', compact('Book'));
// }

// public function update(Book $Book)
// {
//     $Book->update(request()->validate([
//         'title' => 'required',
//         'excerpt' => 'required',
//         'body' => 'required'
//     ]));

//     // $Book = Book::find($id);
        
   

//     return redirect($Book->path());
// }
// }
}