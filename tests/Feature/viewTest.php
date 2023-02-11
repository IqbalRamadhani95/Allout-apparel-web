<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class viewTest extends TestCase
{
    public function testView()
    {
        $response = $this->get('/helo');

        $response->assertSeeText('hello iqbal');
    }
}
