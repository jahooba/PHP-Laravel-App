<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InspectionTest extends TestCase
{
    use RefreshDatabase;

    public function test_inspection_creation() {
        $response = $this->post('/inspections', [
            'vehicle_name'=> 'toyota650',
            'emission_level'=> 28
        ]);

        $response->assertRedirect('/inspections');

        $this->assertDatabaseHas('inspections', [
            'vehicle_name'=> 'toyota650',
            'emission_level'=> 28,
            'passed'=> true
        ]);
    }
}
