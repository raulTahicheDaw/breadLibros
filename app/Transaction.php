<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buyer;
use App\Book;

class Transaction extends Model
{
    protected $fillable = [
        'buyer_id',
        'quantity',
        'book_id',
    ];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }


}
