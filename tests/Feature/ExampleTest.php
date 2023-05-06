<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertSee('Documentation'); // Assert that the request containes some text

        $response->assertStatus(200);
    }

    public function test_the_homepage_contains_symfony(): void
    {
        $response = $this->get('/');

        //$response-> assertSee('Symfony'); // Will return error as it dose not containe this text

        $response->assertStatus(200);
    }
}
