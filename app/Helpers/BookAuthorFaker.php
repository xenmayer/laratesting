<?php

namespace App\Helpers;

use \App\Models\Author;
use \App\Models\Book;


class BookAuthorFaker
{
    /**
     * @param int $entitiesQuantity
     */
    public static function fake(int $entitiesQuantity = 100)
    {
        factory(Author::class, $entitiesQuantity)->create();
        factory(Book::class, $entitiesQuantity)->create();
        $authors = Author::all();

        Book::all()->each(function ($book) use ($authors) {
            $book->authors()->attach(
                $authors->random(rand(1, 5))->pluck('id')->toArray()
            );
        });
    }
}