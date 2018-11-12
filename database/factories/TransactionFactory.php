<?php

use Faker\Generator as Faker;
use App\User;
use App\Book;
$factory->define(App\Transaction::class, function (Faker $faker) {
    $buyer = User::all()->random();
    $book = Book::all()->random();
    return [
        'buyer_id'=> $buyer->id,
        'book_id' => $book->id,
        'quantity' => $faker->numberBetween(1,3),
    ];
});
