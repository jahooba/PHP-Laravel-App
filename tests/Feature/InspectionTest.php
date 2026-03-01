<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InspectionTest extends TestCase
{
    public function test_inspection()
    {
        $response = $this->get('/inspections');

        $response->assertStatus(200);
    }
}
