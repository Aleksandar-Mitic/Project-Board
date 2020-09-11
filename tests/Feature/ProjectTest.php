<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function testUserCanPostProject()
    {

        $this->withoutExceptionHandling();

        $attributes = [
            'title' => 'Test title',
            'description' => 'Test description',
        ];

        $this->post('/projects', $attributes);

        $this->assertDatabaseHas('projects', $attributes);

    }
}
