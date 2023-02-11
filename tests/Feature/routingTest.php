<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class routingTest extends TestCase
{
   public function testGet()
   {
    $this->get('/anjay')
        ->assertStatus(200)
        ->assertSeeText('welcome iqbal');
   }
}
