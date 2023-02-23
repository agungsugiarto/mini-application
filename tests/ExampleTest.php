<?php

namespace Tests;

use Mini\Framework\Testing\DatabaseMigrations;
use Mini\Framework\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_base_endpoint_returns_a_successful_response()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getBody()->getContents()
        );
    }
}
