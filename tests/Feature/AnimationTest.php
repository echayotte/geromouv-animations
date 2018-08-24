<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnimationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    function shows_the_animation()
    {
        // permet de debugguer avec des indications plus claires
        $this->withoutExceptionHandling();
        $this->get('/animation')
            ->assertSuccessful()
            ->assertViewIs('pages.animation.show');
    }
}
