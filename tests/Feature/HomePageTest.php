<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * Tests whether the welcome page can be visted.
     *
     * @test
     */
    public function the_welcome_page_can_be_visited()
    {
        $this->get('/')->assertStatus(200);
    }

    /** @test */
    public function the_welcome_page_includes_the_app_name()
    {
        $response = $this->get('/');
        $response->assertSeeText('T.T.V. Merwestad');
    }
}
