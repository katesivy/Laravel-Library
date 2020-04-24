<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Books;

class Books extends Model
{
    public function path () 
    {
        return route('books.show', $this);
    }

    public function authors () 
    {
        return $this->belongsToMany(Author::class);
    }

    public function checkouts () 
    {
        return $this->belongsToMany(Checkout::class);
    }
}
