<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_welcome_route()
    {
        $this->get('/saludos/rommel/sacaro')
            ->assertStatus(200)
            ->assertSee('Hola rommel, tu apodo es sacaro');
        $this->get('/saludos/raul')
            ->assertStatus(200)
            ->assertSee('Bienvenido raul');
    }
}
