<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Book;
use App\Transaction;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        User::truncate();
        Book::truncate();
        Transaction::truncate();


        factory(User::class, 1000)->create();
        factory(Book::class, 300)->create();
        factory(Transaction::class, 1000)->create();

        Schema::enableForeignKeyConstraints();
    }
}
