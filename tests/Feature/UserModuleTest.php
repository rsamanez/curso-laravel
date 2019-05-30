<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * @test
     */

    function test_if_loads_the_user_list_page()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }

    /**
     * @test
     */
    function test_if_loads_the_user_details()
    {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Datos del usuario: 5');
        $this->get('/usuarios/xxx')
            ->assertStatus(404);
    }

    /**
     * @test
     */
    function test_if_loads_the_user_for_edition()
    {
        $this->get('/usuarios/5/edit')
            ->assertStatus(200)
            ->assertSee('Editar datos usuario: 5');
        $this->get('/usuarios/texto/edit')
            ->assertStatus(404);
    }

}
