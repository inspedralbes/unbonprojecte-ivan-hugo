<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class testing_api extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/api/arboles');
        $response->assertStatus(200)
                 ->assertJsonStructure([
                     '*' => ['id', 'nombre']
                 ]);
    }
}
