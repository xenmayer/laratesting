<?php

namespace Tests\Unit;

use App\Models\Book;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * @inheritdoc
     */
    public function setUp()
    {
        parent::setUp();
        $this->fakeDb();
    }

    /**
     * @test
     */
    public function basicTest()
    {
        $this->assertTrue(true);
    }
}
