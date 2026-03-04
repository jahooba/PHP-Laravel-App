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
            'vehicle_name'=> 'toyota001',
            'emission_level'=> 28
        ]);

        $response->assertRedirect('/inspections');

        $this->assertDatabaseHas('inspections', [
            'vehicle_name'=> 'toyota001',
            'emission_level'=> 28,
            'passed'=> true
        ]);
    }

    public function test_inspection_passed_loads() {
        $response = $this->post('/inspections', [
            'vehicle_name'=> 'toyota002',
            'emission_level'=> 28
        ]);

        $response = $this->get('/inspections');
        $response->assertStatus(200);
        $response->assertSee('<div class=card-pass', false);
    }

    public function test_inspection_failed_loads() {
        $response = $this->post('/inspections', [
            'vehicle_name'=> 'toyota003',
            'emission_level'=> 58
        ]);

        $response = $this->get('/inspections');
        $response->assertStatus(200);
        $response->assertSee('<div class=card-fail', false);
    }
}
