<?php

namespace Tests;

use App\Helpers\BookAuthorFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseTransactions;

    /**
     * Fake it
     */
    public function fakeDb()
    {
        BookAuthorFaker::fake(10);
    }
}
