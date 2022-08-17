<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoadingPagesTest extends TestCase
{
    /**
     * @test
     */
    public function it_has_a_welcome_page()
    {
        $this->get(route('welcome'))
            ->assertStatus(200);
    }

    /** @test */
    public function it_has_a_recreation_page()
    {
        $this->get(route('association.recreation'))
            ->assertStatus(200);
    }

    /** @test */
    public function it_has_a_competition_page()
    {
        $this->get(route('association.competition'))
            ->assertStatus(200);
    }

    /** @test */
    public function it_has_a_contact_page()
    {
        $this->get(route('contact'))
            ->assertStatus(200);
    }
}
