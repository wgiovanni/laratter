<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        // Arrange | Preparanción

        // Act | Acción

        // Assert | Verificación

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Laratter');
    }

    public function testCanSearchForMessages()
    {
        $response = $this->get('/messages?query=Alice');

        $response->assertSee('Alice');
    }
}
