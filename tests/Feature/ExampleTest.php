<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_homepage_contains_text()
    {
        $response = $this->get('/');

        $response->assertSee('Documentation'); // Assert that the request containes some text

        $response->assertStatus(200);
    }

    public function test_the_homepage_contains_text_in_order()
    {
        $response = $this->get('/');

        $response->assertSeeTextInOrder(['Documentation', 'Laracast']); // Assert that the request containes text in order

        $response->assertStatus(200);
    }

    public function test_the_homepage_contains_symfony()
    {
        $response = $this->get('/');

        //$response-> assertSee('Symfony'); // Will return error as it dose not containe this text

        $response->assertStatus(200);
    }

    public function test_the_homepage_dose_not_contain_symfony()
    {
        $response = $this->get('/');

        $response-> assertDontSee('Symfony'); 

        $response->assertStatus(200);
    }

    public function test_the_about_route_returns_a_successful_respone()
    {
        $response = $this->get('/about');

        $response->assertSee('About');

        $response->assertStatus(200);
    }
}
