<?php

namespace Tests\Feature;

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
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
