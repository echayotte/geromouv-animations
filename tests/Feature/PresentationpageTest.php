<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PresentationpageTest extends TestCase
{
    /**
     * @test // ne pas oublier sinon erreur sur la fonction.
     */

    // verification sur page presentation
    function shows_the_presentation_page()
    {
        // permet de debugguer avec des indications plus claires
        $this->withoutExceptionHandling();
        $this->get('/presentation')
            ->assertSuccessful()
            ->assertViewIs('pages.presentation.show');
    }
}
